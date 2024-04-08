# Use the official PHP image
FROM php:7.4-apache as build-stage

# Copy the PHP file into the container for server-info-1
COPY server_info.php /var/www/html/index.php

# Use the official NGINX image
#FROM nginx:latest

# Copy the NGINX configuration file
#COPY nginx.conf /etc/nginx/nginx.conf

# Copy the PHP files from the PHP image
#COPY --from=build-stage /var/www/html /var/www/html

# Expose port 3000
EXPOSE 8000

