# AplicacionLogInLogOffMVC
Se creará una aplicación en PHP con la arquitectura Modelo Vista Controlador. Los objetivos serán los siguientes:

* Iniciar sesión.
* Borrar sesión.
* Registrarse.
* Editar perfil.
* Borrar cuenta.

## v0.1 - 15/04/2019, 16:07 (Versión actual)
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