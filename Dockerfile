FROM php:8.2-apache

# গিটহাবের সব ফাইল সার্ভারের মেইন ফোল্ডারে কপি করার জন্য
COPY . /var/www/html/

# পারমিশন ঠিক করার জন্য
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
