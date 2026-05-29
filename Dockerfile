FROM php:8.2-cli

# Install system packages

RUN apt-get update && apt-get install -y 
git 
unzip 
curl 
libzip-dev 
zip 
nodejs 
npm

# Install PHP extensions

RUN docker-php-ext-install pdo pdo_mysql zip

# Install Composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

# Install Laravel dependencies

RUN composer install --no-dev --optimize-autoloader

# Build Vite assets

RUN npm install
RUN npm run build

# Create Laravel writable folders

RUN mkdir -p storage/framework/cache
RUN mkdir -p storage/framework/sessions
RUN mkdir -p storage/framework/views
RUN mkdir -p storage/logs
RUN mkdir -p bootstrap/cache

# Permissions

RUN chmod -R 777 storage
RUN chmod -R 777 bootstrap/cache

EXPOSE 10000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
