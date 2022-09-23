# 🐳 Docker + PHP 8.1 + MySQL + Nginx + Symfony 6.1 Boilerplate

## Description

This is a complete stack for running Symfony 6.1 into Docker containers using docker-compose tool with [docker-sync library](https://docker-sync.readthedocs.io/en/latest/).

It is composed by 4 containers:

- `nginx`, acting as the webserver.
- `php`, the PHP-FPM container with the 8.0 version of PHP.
- `db` which is the MySQL database container with a **MySQL 8.0** image.

## Requiriments

- `docker-compose`, https://docs.docker.com/compose/install/

## Installation

1. 😀 Clone this rep.

2. Go inside folder `./docker` and run `docker-compose up` to start containers.

3. Inside the `php` container, run `composer install` to install dependencies from `/var/www/symfony` folder.

You could change the name, user and password of the database in the `env` file at the root of the project.

## Tests
- configure yours x-debug (https://docs.devsense.com/pt/vs/debugging/configuring-xdebug)
- With the docker running just click in run test