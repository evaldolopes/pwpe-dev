FROM php:8.3-apache

# ─── Dependências do sistema ───────────────────────────────────────────────
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libicu-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libwebp-dev \
    zip \
    unzip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# ─── Extensões PHP ────────────────────────────────────────────────────────
RUN docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
        --with-webp \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        zip \
        intl \
        xml \
        soap \
        opcache

# ─── Xdebug 3 ─────────────────────────────────────────────────────────────
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# ─── Composer ─────────────────────────────────────────────────────────────
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ─── Módulos Apache ───────────────────────────────────────────────────────
RUN a2enmod rewrite headers

# ─── Configs PHP ──────────────────────────────────────────────────────────
COPY docker/php/php.ini    /usr/local/etc/php/conf.d/99-custom.ini
COPY docker/php/xdebug.ini /usr/local/etc/php/conf.d/99-xdebug.ini

# ─── Permissões ───────────────────────────────────────────────────────────
WORKDIR /var/www/html
RUN chown -R www-data:www-data /var/www/html
