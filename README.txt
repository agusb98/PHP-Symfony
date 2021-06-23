#LINK OF COURSE

    https://www.youtube.com/playlist?list=PLDbrnXa6SAzVxekjG2LBmJ5WxO4iypGlq

# TIPS AT THE MOMENT TO CREATE SYMFONY PROYECT

    Install Symfony, link: https://symfony.com/download

    terminal:
        cd C:/xampp/htdocs
        symfony new proyect_name
        symfony serve:start

# DATABASE

    .env
        Set DATABASE_URL="mysql://root:@127.0.0.1:3306/Ejemplo?serverVersion=5.7"

    terminal:
        Agregar
            php bin/console doctrine:database:create

        Actualizar
            php bin/console doctrine:schema:update --force

# ADD ENTITY
    terminal:
        php bin/console make:entity EntityName

        Usuario(es complejo, utiliza otra cosa..):
            php bin/console make:entity user


# ADD CONTROLLER
    terminal:
        php bin/console make:controller
        
       
