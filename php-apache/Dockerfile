FROM php:5.6-apache
RUN curl -fsSL 'https://xcache.lighttpd.net/pub/Releases/3.2.0/xcache-3.2.0.tar.gz' -o xcache.tar.gz \
&& mkdir -p /tmp/xcache \
&& tar -xf xcache.tar.gz -C /tmp/xcache --strip-components=1 \
&& rm xcache.tar.gz \
&& docker-php-ext-configure /tmp/xcache --enable-xcache \