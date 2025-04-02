# CURSO ALURA - MVC COM PHP

## Anotações

Alterar o php.ini para liberar o ;extension=pdo_sqlite

## Comandos Realizados

```

composer install

php -S localhost:8080 -t public

#erro de exclusão failed to open stream: No such file or directory
vendor/bin/doctrine orm:generate-proxies

vendor/bin/doctrine dbal:run-sql "INSERT INTO usuarios (email, senha) VALUES ('teste@teste.com.br', '$argon2i$v=19$m=65536,t=4,p=1$Z1VZclRKUjYzRDhxUk14Wg$75pxt7+5zxfhlRyPffi6Q9qSkpvia+B1Deme4Rd4ZgU');"

vendor/bin/doctrine dbal:run-sql "select * from usuarios"

composer require psr/http-message

composer require psr/http-server-handler

composer require nyholm/psr7

composer require nyholm/psr7-server

```
