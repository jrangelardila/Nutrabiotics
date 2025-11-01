FROM php:8.2-apache

#requirimientos de moodle y wordpress
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libxml2-dev \
    libicu-dev \
    zip \
    unzip \
    git \
    curl \
 && docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install gd mysqli pdo pdo_mysql zip intl opcache \
 && a2enmod rewrite \
 && rm -rf /var/lib/apt/lists/*

#Config de apache, para los sitios
COPY moodle.conf /etc/apache2/sites-available/moodle.conf

#habilitar los sitios
RUN a2dissite 000-default.conf \
 && a2ensite moodle.conf

RUN chown -R www-data:www-data /var/www && \
    chmod -R 777 /var/www/

#reinicio
CMD ["apache2-foreground"]
