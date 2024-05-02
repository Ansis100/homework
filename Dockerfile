# Use official PHP image from Docker Hub
FROM php:7.4-apache

# Install Git
RUN apt-get update && apt-get install -y git

# Set working directory
WORKDIR /var/www/html

# Copy source code into container
COPY . /var/www/html

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Install dependencies
RUN composer install

# Enable Apache modules
RUN a2enmod rewrite

# Start Apache server
CMD ["apache2-foreground"]

