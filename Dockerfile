# 1. Imagen base PHP-FPM
FROM php:8.2-fpm

# 2. Instala extensiones y utilidades necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl nginx supervisor \
    && docker-php-ext-install pdo_mysql zip

# 3. Instala Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 4. Copia el proyecto al contenedor
WORKDIR /var/www/html
COPY . .

# 5. Instala dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# 6. Copia archivo de configuración de Nginx
RUN rm /etc/nginx/sites-enabled/default
COPY nginx.conf /etc/nginx/conf.d/default.conf

# 7. Permisos de storage y cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 8. Expone el puerto que usará Render
EXPOSE 8080

# 9. Usa supervisord para correr Nginx + PHP-FPM
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
CMD ["/usr/bin/supervisord"]
