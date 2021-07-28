# Composer  💻 

> este es un ejemplo de como utilizar [composer](https://getcomposer.org "composer") 

- se puede utilizar  [Packagist](https://packagist.org "Packagist") para poder ver los paquetes  o librerias que hay disponibles para composer

Si se desesa usar el asistente 

- composer init 
- composer install 

sino: 

- ejemplo: 
> en archivo de composer.json

````json
{
    "name": "cathy/text",
    "autoload": {
        "psr-4": {
            "Text\\": "src/"
        },
        "files": [
            "src/herlpers.php"
        ]
    }
}
````