# AplicacionLogInLogOffMVC
Se creará una aplicación en PHP con la arquitectura Modelo Vista Controlador. Los objetivos serán los siguientes:

- [x] Iniciar sesión.
- [x] Borrar sesión.
- [x] Registrarse.
- [x] Editar perfil.
- [x] Borrar cuenta.
- [ ] Modificar contraseña. (Adicional)

## v0.3 - 14/04/2019, 23:06 (Versión actual)
En esta versión se hace uso de la clase DBPDO.php en las funciones de la clase UsuarioPDO.php, además se ha 
implementado la funcionalidad del registro de usuario. 

Con esta versión se cumplen los objetivos principales de la aplicación pero se le añadirá en la próxima versión
la funcionalidad del cambio de contraseña.

* controller
    * Añadido cRegistro.php.

* model
    * Modificado DBPDO.php.
    * Modificado Usuario.php.
    * Modificado UsuarioPDO.php.
    
* view
    * Modificado vLogin.php.
    * Añadido vRegistro.php.

* webroot
    * css
        * Añadido vRegistroStyles.php.

## v0.2 - 18/04/2019, 23:02
En esta versión se implementa la edición de la descripción del usuario y el borrado de la cuenta de usuario.

* config
    * Modificado config.php.

* controller
    * Modificado cInicio.php.
    * Modificado cLogin.php.
    * Añadido cMiCuenta.php.

* model
    * Modificado Usuario.php.
    * Modificado UsuarioPDO.php.

* scriptDB
    * Modificado 01_Creacion.sql.
    * Modificado 02_Inserción.sql.

* view
    * Modificado layout.php.
    * Modificado vInicio.php.
    * Modificado vLogin.php.
    * Añadido vMiCuenta.php.
    * Añadido vRegistro.php.

* webroot
    * css
        * Añadido vInicioStyles.css.
        * Añadido vMiCuentaStyles.css.

    * images
        * Añadido 20-xampp-logo-trio1.jpg.
        * Añadido 598970_ee10-1.jpg.
        * Añadido GitHub-Octocat.jpg.
        * Añadido Jquery-Logo.png.
        * Añadido bootswatch.png.
        * Añadido netbeans-logo-500x330.jpg.
        * Añadido rss2.jpg.

* Modificado index.php

## v0.1 - 15/04/2019, 16:07
Actualmente se encuentra en funcionamiento el inicio y el borrado de la sesión de usuario.

* config
    * Añadido config.php.
    * Añadido configDB.php.

* controller
    * Añadido cInicio.php.
    * Añadido cLogin.php.

* core
    * Añadido validacionFormularios.php.

* doc
    * Añadido 180301CatalogoDeRequisitos.pdf.

* model
    * Añadido DBPDO.php.
    * Añadido Usuario.php.
    * Añadido UsuarioDB.php.
    * Añadido UsuarioPDO.php.

* scriptDB
    * Añadido 01_Creacion.sql.
    * Añadido 02_Inserción.sql.

* view
    * Añadido layout.php.
    * Añadido vInicio.php.
    * Añadido vLogin.php.

* webroot
    * css
        * Añadido vLoginStyles.css.
    * images
        * Añadido 180503ArbolDeNavegacion.jpg.
        * Añadido 180503CasosDeUsol.jpg.
        * Añadido 180503DiagramaDeClases.jpg.
        * Añadido 180503ModeloFisicoDeDatos.jpg.
        * Añadido 180503RelacionDeFicheros.jpg.
        * Añadido EstructuraDeAlmacenamiento.JPG.

* Añadido index.php
