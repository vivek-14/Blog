# Set up Nginx
FROM nginx:latest

# Copy Nginx configuration file
COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

# Copy Laravel public directory to Nginx root
COPY public /var/www/html/public

# Expose port 80
EXPOSE 80

# Start Nginx
CMD ["nginx", "-g", "daemon off;"]
