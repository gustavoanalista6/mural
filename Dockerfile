# Usamos a imagem oficial do PHP 7.3 com FPM
FROM php:7.3-fpm

# Definir diretório de trabalho
WORKDIR /var/www

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libzip-dev \
    libonig-dev

# Limpar cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar extensões do PHP necessárias para Laravel e MySQL
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
RUN docker-php-ext-install gd

# Instalar Composer
COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

# Copiar arquivos existentes do projeto
COPY . /var/www

# Ajustar permissões para a pasta storage e bootstrap/cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]