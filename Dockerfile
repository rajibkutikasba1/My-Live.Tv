FROM php:8.2-apache

# যদি ফাইল কোনো ফোল্ডারেও থাকে, সব ফাইল সার্ভারের মেইন ডিরেক্টরিতে কপি হবে
COPY . /var/www/html/

# ফাইলটি ঠিকমতো চেনার জন্য এবং পারমিশন এরর দূর করতে
RUN chown -R www-data:www-data /var/www/html/ && chmod -R 755 /var/www/html/

EXPOSE 80
