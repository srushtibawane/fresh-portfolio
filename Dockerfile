FROM richarvey/nginx-php-fpm:3.1.6

COPY . .

ENV WEBROOT=/var/www/html/public
ENV SKIP_COMPOSER=0
ENV RUN_SCRIPTS=1
ENV PHP_ERRORS_STDERR=1
ENV LOG_STDOUT=1
ENV REAL_IP_HEADER=1

RUN composer install --no-dev --optimize-autoloader

CMD ["/start.sh"]