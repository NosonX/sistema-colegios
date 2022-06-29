# Universidad Hispanoamericana - IIQ 2022 - Programación III - Proyecto Final

## Información sobre el proyecto

### Descripción
Este proyecto forma parte del trabajo final del curso de Programación III.  El mismo se trata de un sistema de gestión
para colegios públicos basado en los requerimientos dados por el profesor.

### Alumnos
* Eduardo Alfaro Montero
* Dannier Marín Pérez
* Alfredo Esteban Morales Fallas

## Correr proyecto localmente

### Requerimientos previos
* Se recomienda alguno de los siguientes servidores locales:
  * MAMP (recomendado para MacOS) - https://www.mamp.info/en/downloads/
  * XAMPP (recomendado para Windows) - https://www.apachefriends.org/es/download.html
  * WAMP - https://www.wampserver.com/en/
* PHP v7.4.21 o superior (no soporta v8)
* MySQL v5.7.34
* Git - https://git-scm.com/book/en/v2/Getting-Started-Installing-Git
* Composer - https://getcomposer.org/download/
* Node.js v16.15.0 (Se recomienda usar nvm)
  * Windows: https://github.com/coreybutler/nvm-windows
  * MacOS: https://github.com/nvm-sh/nvm

### Pasos

1. Navegar a la carpeta `htdocs` desde la terminal. 
   - La carpeta está ubicada en la instalación de su servidor local (MAMP ,XAMPP, etc).
   - En MacOS se puede usar: `cd /Applications/MAMP/htdocs`
2. Clonar el repositorio desde la terminal usando alguno de los siguientes comandos:
   - Para usar https: `git clone https://github.com/NosonX/sistema-colegios.git`
   - Para usar ssh: `git clone git@github.com:NosonX/sistema-colegios.git`
3. Correr: `cd sistema-colegios`
4. Instalar dependencias de PHP: `composer install`
5. Instalar dependencias de JavaScript: `npm install`
6. Iniciar el servidor local
7. Navegar a http://localhost:8080/sistema-colegios (cambiar 8080 si es necesario por el puerto configurado en su servidor local)

## Estructura de carpetas
#### Root
    .
    ├── app                 // Logica de la aplicación
    ├── public              // Archivos estáticos
    ├── src                 // Código fuente no compilado de JavaScript y Sass
    ├── .gitignore          // Archivos ignorados por git
    ├── .htaccess           // Archivo de configuración de Apache
    ├── .nvmrc              // Archivo de nvm para espicificar la version de Node.js del proyecto
    ├── composer.json       // Manejo de librerías de PHP
    ├── composer.lock  
    ├── database.sql        // Código para la creación de la base de datos para el proyecto
    ├── LICENSE             
    ├── package.json        // Manejo de librerías de JavaScript
    ├── package-lock.json
    ├── README.md
    └── webpack.mix.js      // Configuración de webpack usando laravel-mix

#### App
    .
    └── app
        ├── controllers     // Donde se colocan todos lo controladores
        ├── core            // Donde se encuentra el nucleo del framework creado
        ├── models          // Donde se colocan los modelos
        ├── views           // Donde se colocan las vistas
        ├── .htaccess       // Archivo de configuración de Apache
        ├── autoload.php    // Donde se cargan las librerías y dependencias del sistema
        └── routes.php      // Donde se colocan todas las rutas

---

## Guía de uso
<details>
    <summary>Crear nueva ruta</summary>
    <br>
    Para agregar una ruta se debe ir al archivo <code>app/routes.php</code>. La variable <code>$router</code> contiene una instancia del objeto <code>Router</code> el mismo forma parte del core del framework creado para este proyecto.
    <code>Router</code> tiene un metodo llamado <code>addRoute</code> que recibe los siguientes parametros: metodo http, ruta, controlador y metodo del controlador.
    <br>
    Ejemplo:
    <br>
    <code>$router->addRoute(new Route(HttpMethod::$GET, '/my-route', MyController::class, 'myMethod'));</code>
</details>

<details>
    <summary>Ejemplos de uso del "ORM"</summary>
    <p>
        Where: <code>$admin = Admin::where("email='creado@conorm.com'");</code>
    </p>
    <p>
        Buscar por ID: <code>$admin = Admin::find(1);</code>
    </p>
    <p>
        Crear:
        <br>
        <code>$admin = new Admin();</code>
        <br>
        <code>$admin->email = 'crear@nuevo.com';</code>
        <br>
        <code>$admin->clave = 12345;</code>
        <br>
        <code>$id = $admin->save(); // returns id of created object</code>
    </p>
    <p>
        Actualizar:
        <br>
        <code>$admin = Admin::find(5);</code>
        <br>
        <code>$admin->email = 'actualizar2@actualizar.com';</code>
        <br>
        <code>$admin->save();</code>
    </p>
    <p>
        Delete: <code>$deletedAdmin = Admin::delete(10);</code>
    </p>
</details>