FROM anvaya/docker-symfony:latest as symfony-build

# Composer
WORKDIR /var/www
COPY . ./
ENV HTTPS false

# Nginx
COPY docker/nginx.conf /etc/nginx/nginx.conf

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]