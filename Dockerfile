FROM webdevops/php-nginx:8.2

WORKDIR /app

COPY . /app

ENV WEB_DOCUMENT_ROOT=/app/public

# Set writable temp directories

ENV TMPDIR=/app/storage/tmp
ENV TEMP=/app/storage/tmp
ENV TMP=/app/storage/tmp

RUN composer install --no-dev --optimize-autoloader

# Create Laravel writable folders

RUN mkdir -p /app/storage/framework/cache
RUN mkdir -p /app/storage/framework/sessions
RUN mkdir -p /app/storage/framework/views
RUN mkdir -p /app/storage/logs
RUN mkdir -p /app/storage/tmp
RUN mkdir -p /app/bootstrap/cache

# Permissions

RUN chmod -R 777 /app/storage
RUN chmod -R 777 /app/bootstrap/cache

EXPOSE 8080
