# CodeIgniter 4 Application Starter with Bootstrap 5

## What is this CodeIgniter Project?
It is a simple project which you find in get started section of CodeIgniter User Guide. 
A simple News blog project. without any login/authentication. for showing news archive, showing news article and post/create news article.
The only addition in this project is to add Bootstrap 5 css framework. via CDN 

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Run

run following commands first inside the project folder.
```bash
composer update
```

then create a db in your MySql  with name "ci4"

then run following command to create tables 
```bash
php spark migrate
```

(Optional) and then to add some dummy news in db you can run following command
```bash
php spark db:seed News
```

then finally just run the following command to run project
```bash
php spark serve
```