FROM php:8.3-fpm

WORKDIR /usr

# install imagick
RUN apt-get update; \
	apt-get install -y imagemagick libmagickwand-dev libmagickcore-dev; \
	pecl install imagick; \
	docker-php-ext-enable imagick; \
	apt-get install -y xvfb libxrender1 libxtst6 libxi6 default-jre curl; \
	chown -R www-data:www-data /var/www;