FROM php:8.2-fpm

# 必要な拡張機能インストール
RUN docker-php-ext-install pdo_mysql

# Composer インストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Nginx用設定
RUN apt-get update && apt-get install -y nginx
COPY . /var/www/html
WORKDIR /var/www/html

# Nginx 設定ファイルを配置
COPY ./nginx/laravel.conf /etc/nginx/sites-available/default

# 権限設定
RUN chown -R www-data:www-data /var/www/html

# Nginx と PHP-FPM を同時に起動
CMD service nginx start && php-fpm
