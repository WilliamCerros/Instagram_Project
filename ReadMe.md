Requirements to run program

Before getting started, here are some thing you'll need:

PHP7 - Learn how to install it in Windows, Mac or Linux
Composer - Learn how to install it
A terminal - Your OS should already come with one

Install Dependencies:
Composer install

Setting up the database:
This app requires a database. You can use a sqlite database, which makes this process the simplest.
To configure it, search for a .env.example file on the repository and rename it to .env
You'll also need to open the database folder and create an empty file called database.sqlite

After this, open your .env file in a text editor and make the following changes to DB_DRIVER and DB_DATABASE
DB_DRIVER=sqlite
DB_DATABASE=database/database.sqlite

Open up a terminal window and run php artisan migrate within directory

Set up application key:
php artisan key:generate

Get the server running:
php artisan serve

