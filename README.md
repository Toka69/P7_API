# P7_API

This is the seventh project in my Symfony developer journey. This is to create an API RESTful with Symfony for a B2B smartphone sales company.
For the purposes of this project I used Apiplatform.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

-  PHP 7.4
-  Symfony 5.2
-  Symfony CLI
-  Composer

Developed and tested with MariaDB, in this case the following PHP extensions are necessary:

-  pdo_mysql extension
-  mysqli extension

### Installing

A step by step series of examples that tell you how to get a development env running

1) Clone the project in your workspace of your PHP environment.

2) Install the necessary libraries via composer
   ```
   php composer install
   ```

3) Copy the .env file to .env.local and change the settings according to your needs. The parameters present in .env.local overwrite those found in .env

4) Create the database
   ```
   php bin/console doctrine:database:create
   ```

5) Make a migration and migrate it
   ```
   php bin/console make:migration
   php bin/console doctrine:migrations:migrate
   ```

6) Load fixtures
   ```
   php bin/console doctrine:fixtures:load
   ```

7) Generate JWT keys
   ```
   php bin/console lexik:jwt:generate-keypair
   ```
   
8) Run the symfony web server
   ```
   symfony server:ca:install
   symfony server:start
   ```
9) It's ready!

### Docker

If you want to use a ready container for this project you can build the docker-compose inside the "build" directory. Previously, you can
change the settings according to your needs.
If you are using a MySQL / MariaDB database, make sure they are on the same docker network. Here it is the "my-network" network, you can change it in the docker-compose file.

To build it:
   ```
   /build/docker-compose up -d
   ```
### Test online

The project is hosted online. It works as a demo, and the content is refresh everyday. Fixtures are reloaded and uploaded files are erased.
So you can try it!

https://p7.matthias-leroux.fr

### Some requests

To get a Token with the first user:
   ```
   POST /api/login_check
   
   Header 'Content-Type' = 'application/json',
   Body JSON
   {
      "apiKey": "1234567890123456789012345678901234567890",
      "secret": "secret1"
   }
   ```

To get Products with the obtained token:
   ```
   GET /api/products
   
   Header 'Authorization' = 'Bearer $token'
   ```