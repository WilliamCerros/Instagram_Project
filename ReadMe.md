Requirements to run program

Before getting started, here are some thing you'll need:

Laravel download instructions: https://laravel.com/docs/5.8/installation

PHP7

Composer

A terminal

After cloning repo into your local machine follow theses steps.

Composer install:
Link to download composer -> https://getcomposer.org/download/

Within your working directory:

Install Dependencies by 

running composer install from command prompt/terminal

Setup the database by 

finding the file .env.example and rename it to .env
Then open the database folder and create a file named database.sqlite
After creating the file open your .env file in a text editor and make the following
changes. DB_CONNECTION = sqlite then delete the following lines 


DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

then open 
your terminal and within your working directory 

run php artisan migrate


Then to setup application key, in your terminal run

php artisan key:generate 

then finally run the command 

php artisan serve 

to boot up your localhost


Copy and paste localhost to web browser.
