# =============================================
# Dockerfile - NexaTech Solutions
# Menggunakan FrankenPHP sebagai web server PHP
# =============================================

FROM dunglas/frankenphp:latest-php8.3-alpine

# Install ekstensi PHP yang umum dibutuhkan
RUN install-php-extensions \
    pdo \
    pdo_mysql \
    mysqli \
    mbstring \
    opcache \
    gd \
    zip \
    intl

# Set working directory
WORKDIR /app

# Salin semua file project ke dalam container
COPY . /app

# Berikan permission yang tepat
RUN chmod -R 755 /app

# Salin Caddyfile custom ke lokasi yang tepat
COPY Caddyfile /etc/caddy/Caddyfile

# Expose port 80
EXPOSE 80

# Jalankan FrankenPHP
CMD ["frankenphp", "run", "--config", "/etc/caddy/Caddyfile"]
