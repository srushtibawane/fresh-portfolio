FROM webdevops/php-nginx:8.2

WORKDIR /app

COPY . /app

# Install Node.js

RUN apt-get update && apt-get install -y curl
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash -
RUN apt-get install -y nodejs

ENV WEB_DOCUMENT_ROOT=/app/public

# Install PHP dependencies

RUN composer install --no-dev --optimize-autoloader

# Install Node dependencies and build assets

RUN npm install
RUN npm run build

# Clear Laravel cache

RUN php artisan optimize:clear

EXPOSE 8080
