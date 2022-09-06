# Cinema App

## Installation

Build docker image
```bash
docker-compose build
```
## Usage
Run docker image as a daemon
```bash
docker-compose up -d
```
Stop docker
```bash
docker-compose stop
```

## Development
First, get into container
```
docker composer exec app bash 
```
Composer install
```bash
composer install
```

Create table with generated/configured migration class
```
php artisan migrate 
```
## Local connection
Configuration .env:
```
DOCKER_NGINX_EXTERNAL_PORT=8080 -> local machine service port access via request client (e.g. Postman) 
DOCKER_MYSQL_EXTERNAL_PORT=3316 -> in MySQL client (e.g. MySQL Workbench) set the address to localhost:3316 
```
### php-course-2022-team5