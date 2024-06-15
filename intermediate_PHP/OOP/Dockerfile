# Use the nfqlt/php81-fpm base image
FROM nfqlt/php81-fpm

# Set the working directory inside the container
WORKDIR /var/www/html

# Install dependencies required for building PHP extensions
RUN apt-get update && \
  apt-get install -y \
  php8.1-pdo \
  php8.1-mysql

# Copy the application code from the host to the container
COPY . .

# Expose port 9000 to the host
EXPOSE 3000

# Clean up
RUN apt-get clean && \
  rm -rf /var/lib/apt/lists/*
