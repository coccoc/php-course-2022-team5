CREATE DATABASE 'cinema-php';
CREATE USER 'dev'@'localhost' IDENTIFIED BY 'dev==';
GRANT ALL PRIVILEGES ON cinema-php.* TO 'dev'@'%' IDENTIFIED BY 'dev==';
GRANT ALL PRIVILEGES ON cinema-php.* TO 'dev'@'localhost' IDENTIFIED BY 'dev==';