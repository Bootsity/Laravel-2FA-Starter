## Laravel 2FA Starter

> This starter app is built for the purpose of the article written on **Implementing Two-factor Authentication in Laravel Applications** on [Bootsity](https://bootsity.com)

### Installation

Clone the repository by running `git clone https://github.com/Bootsity/Laravel-2FA-Starter.git` on your terminal

Navigate into the directory (using the terminal or your explorer), then run `cp .env.example .env` and set up your environment variables as well database and mail configuration in the `.env` file created.

Run `composer install` to install dependencies.

Run `php artisan key:generate` to generate application key

Run `php artisan migrate` to create database tables, then seed the users table with sample user data using the tinker (`php artisan tinker`)

Serve your app and test.

Cheers!
