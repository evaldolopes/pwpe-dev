FROM php:8.3-fpm-alpine

# Instalar dependências do sistema
RUN apk add --no-cache \
    git \
    curl \
    zip \
    unzip \
    mysql-client \
    bash \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    oniguruma-dev \
    libxml2-dev \
    linux-headers \
    autoconf \
    g++ \
    make

# Instalar PECL extensions (XDebug)
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Instalar extensões PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    pdo \
    pdo_mysql \
    mysqli \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    opcache

# Configurar OPcache para produção
RUN { \
    echo 'opcache.enable=1'; \
    echo 'opcache.memory_consumption=256'; \
    echo 'opcache.interned_strings_buffer=16'; \
    echo 'opcache.max_accelerated_files=10000'; \
    echo 'opcache.revalidate_freq=2'; \
    echo 'opcache.fast_shutdown=1'; \
    } > /usr/local/etc/php/conf.d/opcache.ini

# Copiar configuração XDebug
COPY conf.d/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Configurar diretório de trabalho
WORKDIR /var/www/html

# Copiar configuração PHP-FPM
COPY php-fpm.conf /usr/local/etc/php-fpm.d/zzz-custom.conf

# Copiar script de entrada
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 9000

ENTRYPOINT ["docker-entrypoint.sh"]

CMD ["php-fpm", "-F"]
