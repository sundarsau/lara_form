# Use Same blade file for create and update in Laravel
 Laravel - use the same form for add and update
This Laravel demo application is using the same form for add and edit. It uses Laravel 10 and MySQL. It displays a list of product categories and option to Edit. The Add form is used for upadte also.

# How To Use
1. Download the repository from https://github.com/sundarsau/lara_form

2. Extract it into a folder

3. Create a Database in MySQL

4. Copy .env.example to .env and update database name, username and password. For example, I used the database lara_form and updated database details as below:

   DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=lara_form DB_USERNAME=root DB_PASSWORD=

5.Run composer install from project root

6.Run php artisan key:generate

7.Run php artisan migrate. This will create Laravel default tables and also will create a custom table named categories.

8. Run php artisan serve

8. In Browser run localhost:8000/category

License
This is an MIT license, you can modify the code according to your requirements
