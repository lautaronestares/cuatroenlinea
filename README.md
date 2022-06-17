<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Cuatro en línea online.
    En este proyecto, junto con mis compañeros de 6to año Informática del Politecnico Rosario, vamos dar función al juego "Cuatro en Linea" en un servidor web. Este proyecto es llevado a cabo en la materia AAT.

<br/>

# Como adaptar nuestro proyecto a un entorno con Laravel
    ## Prerrequisitos
        Para comenzar con la configuracion, debemos instalar los siguientes softwares, lo podemos realizar desde los links a continuacion:
    - DDEV (https://ddev.readthedocs.io/en/stable/)
    - Docker (https://docs.docker.com/desktop/) 
    - Composer (https://getcomposer.org/download/)

    Para que no queden dudas sobre la instalacion de estas herramientas, proporciono links a videos que pueden ser de ayuda :)
        - Docker (https://www.youtube.com/watch?v=6idFknRIOp4)
        - Composer (https://www.youtube.com/watch?v=tpihb48mTyA)

    ## Configuración
        Una vez instaladas todas las herramientas, procederemos a su configuración.

<br/>

    ## Instrucciones

    ### Descargar el repositorio en el directorio local de nuestra PC:
        Para esto debemos ejecutar este comando en la consola: 
        
        >``git clone https://github.com/lautaronestares/cuatroenlinea.git``

<br/>

    ### Configuracion de Docker:
        Debemos ejecutar >``Docker Desktop`` y una vez dentro debemos dirigirnos al directorio en el cual clonamos el proyecto.
        
        La primer orden que debemos escribir en consola es la de 
        
        >``ddev config``
        
        Este comando sirve para configurar el contenedor propio de Docker en el cual vamos a estar trabajando.
        El terminal nos pedirá un nombre para nuestro proyecto y una raiz para guardarlo, los cuales podemos dejar por defecto.
        También nos pedirá especificar el tipo del proyecto, el cual debemos indicar como laravel.
    
        Una vez terminada esta pequeña configuracion lo iniciaremos introduciendo el comando:
        
        >``ddev start``

<br/>

    ### Inclusion de Composer:
        Composer es un gestor de dependencias de php, el cual necesitampos para nuestro código.
        
        Debemos conectarnos al servidor local con el siguiente comando:
        
        >``ddev ssh``
        
        Una vez que verificamos que todo está en orden, vamos a actualizar el programa:
        
        >``composer update``

<br/>

    ### Crear archivo de ambiente
        Debemos crear un archivo de ambiente para el proyecto. Esto lo realizaremos con los comandos:
        
        >``ls -la``
        
        >``cp .env example . env``
       
       <br/>

    ### Clave
        Vamos a crear una clave de aplicación para nuestro proyecto.
        Para hacerlo introduciremos el comando:
        
        >``php artisan key:generate``

<br/>

    ### Pasos finales
        Si pasamos todos estos retos sin errores estamos en la recta final.
        Primero debemos salir del local host con el comando 
        
        >``exit``
        
        y reiniciar el proyecto de ddev con:
        
        >``ddev restart``
        
        Ahora la consola nos debería soltar un montón de información y entre esas lineas va a aparecer un link a la pagina web en donde podemos probar el proyecto.
        
        Notamos que al abrir el link en el navegador nos saldrá el home de laravel.
        
        Tenemos que agregar al final del link >``/jugar/1`` para poder ingresar al cuatro en linea.
        
    ### Cerrar los contenedores
        Mientras realizamos todas estas configuraciones hay contenedores abiertos los cuales debemos cerrar manualmente si dejamos de editar el proyecto ya que estos procesos harán más lento el comportamiento de nuestra computadora.
        
        Para ello lo único que debemos hacer es:
        
        >``ddev poweroff``
        
        <br/>

        
 ## Volver a ingresar
    Para volver a ingresar a la página, teniendo todo configurado como hicimos anteriormente, solo debemos introducir el siguiente comando en el directorio del proyecto:
    >``ddev start``
        
        
    
    
