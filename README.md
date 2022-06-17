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
* Composer - https://getcomposer.org/download/
* Git - https://git-scm.com/book/en/v2/Getting-Started-Installing-Git

### Pasos
1. Navegar a la carpeta `htdocs` desde la terminal. 
   - La carpeta está ubicada en la instalación de su servidor local (MAMP ,XAMPP, etc).
   - En MacOS se puede usar: `cd /Applications/MAMP/htdocs`
2. Clonar el repositorio desde la terminal usando alguno de los siguientes comandos:
   - Para usar https: `git clone https://github.com/NosonX/sistema-colegios.git`
   - Para usar ssh: `git clone git@github.com:NosonX/sistema-colegios.git`
3. Correr: `cd sistema-colegios`
4. Instalar dependencias: `composer install`
5. Iniciar el servidor local
6. Navegar a http://localhost:8080/sistema-colegios (cambiar 8080 si es necesario por el puerto configurado en su servidor local)

## Estructura de carpetas
    .
    ├── ...
    ├── .gitignore
    ├── LICENSE
    └── README.md
