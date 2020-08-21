## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

## Prerequisites
What things you need to install the software.

- Git
- PHP
- Composer
- Laravel CLI
- Node

## Install
Clone the git repository on your computer
```
$ git clone https://github.com/bullypb23/calendar.git
```
You can also download the entire repository as a zip file and unpack in on your computer if you do not have git

After cloning the application, you need to install it's dependencies.
```
$ cd calendar
$ composer install
npm install
```

## Setup
When you are done with installation, copy the .env.example file to .env
```
$ cp .env.example .env
```

Run the application
```
$ php artisan serve
```