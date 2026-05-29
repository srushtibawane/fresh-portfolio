FROM webdevops/php-nginx:8.2

WORKDIR /app

COPY . /app

ENV WEB_DOCUMENT_ROOT=/app/public

RUN composer install --no-dev --optimize-autoloader

RUN npm install && npm run build

RUN php artisan optimize

EXPOSE 8080