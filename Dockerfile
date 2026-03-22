FROM php:8.3-apache

# Install system dependencies with Iranian mirror (using trixie instead of bookworm)
RUN rm -f /etc/apt/sources.list.d/* && \
    echo "deb https://edge31.10.ir.cdn.ir/repository/debian trixie main contrib non-free" > /etc/apt/sources.list && \
    echo "deb https://edge31.10.ir.cdn.ir/repository/debian-security trixie-security main contrib non-free" >> /etc/apt/sources.list && \
    apt-get update && \
    apt-get install -y --no-install-recommends \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Configure and install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    gd \
    mysqli \
    pdo \
    pdo_mysql \
    zip

# Enable Apache modules
RUN a2enmod rewrite headers

# Set working directory
WORKDIR /var/www/html

# Runtime source code is bind-mounted by docker-compose.
# Keep only minimal folder bootstrap inside the image.
RUN mkdir -p /var/www/html/var

# Configure Apache to use /var/www/html as DocumentRoot
RUN sed -i 's!/var/www/html!/var/www/html!g' /etc/apache2/sites-available/000-default.conf

# Expose Apache port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]

# Set permissions
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html