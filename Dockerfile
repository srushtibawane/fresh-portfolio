FROM webdevops/php-nginx:8.2

WORKDIR /app

COPY . /app

ENV WEB_DOCUMENT_ROOT=/app/public

RUN composer install --no-dev --optimize-autoloader

RUN mkdir -p storage/framework/cache
RUN mkdir -p storage/framework/sessions
RUN mkdir -p storage/framework/views
RUN mkdir -p storage/logs
RUN mkdir -p bootstrap/cache

RUN chmod -R 775 storage
RUN chmod -R 775 bootstrap/cache

EXPOSE 8080
