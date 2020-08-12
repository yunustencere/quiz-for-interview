## Quiz
Questions are in the Questions.txt which is at the root directory of the project

Every answer has a unique controller. You can see the answers of questions are marked before the controller name.(Q1Controller, Q2Controller etc. Hint:check web.php). 
There is a file named "Psuedocode" on the root directory of the project. You can see the psuedocodes of related questions.

### Install
Clone the project

Create a database and edit .env file accordingly

Go to directory of project

Run
```
$ composer install
```
to install dependencies

Run
```
$ php artisan key:generate
```

You should run
```
$ php artisan migrate
```
to create database table and
```
$ php artisan db:seed
```
to seed the database with related entries.




Check web.php to route between questions