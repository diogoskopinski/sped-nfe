FROM php:8.2-cli

# Dependências + extensões necessárias (soap é a principal)
RUN apt-get update && apt-get install -y --no-install-recommends \
    git unzip libxml2-dev libzip-dev \
 && docker-php-ext-install soap zip \
 && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
