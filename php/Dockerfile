FROM php:8.2-fpm
EXPOSE 5173

# Node.js セットアップ
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# パッケージのインストール
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libicu-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl

# Composer インストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
