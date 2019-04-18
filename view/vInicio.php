<link rel="stylesheet" type="text/css" href="webroot/css/vInicioStyles.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#" onclick="return false">Ventana de inicio</a>
    <form name="formInicio" action="<?php echo $_SERVER['PHP_SELF']; ?>" action="POST">
        <ul class="nav nav-pills">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['usuario']->getDescUsuario(); ?></a>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                    <input type="submit" id="editarPerfil" class="dropdown-item" name="editarPerfil" value="Editar Perfil"/>
                    <input type="submit" id="mtoDepartamentos" class="dropdown-item" name="mtoDepartamentos" value="Mto. Departamentos"/>    
                    <?php if ($_SESSION['usuario']->getPerfil() == 'administrador') { ?>
                        <div class="dropdown-divider"></div>
                        <input type="submit" id="mtoUsuarios" class="dropdown-item bg-warning" name="mtoUsuarios" value="Mto. Usuarios"/>
                    <?php } ?>
                    <div class="dropdown-divider"></div>
                    <input type="submit" id="cerrarSession" class="dropdown-item bg-danger" name="cerrarSession" value="Log Out"/>
                </div>
            </li>
        </ul>
    </form>
</nav>
<p><?php echo $_SESSION['visitas'] ?></p>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="https://github.com/israxx97/AplicacionLogInLogOffMVC" target="_blank">
                        <div class="redimensionar1"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">Git Hub</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="https://bootswatch.com/" target="_blank">
                        <div class="redimensionar2"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">Bootswatch</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="https://getbootstrap.com/" target="_blank">
                        <div class="redimensionar3"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">Bootstrap</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="https://jquery.com/" target="_blank">
                        <div class="redimensionar4"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">jQuery</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="" target="_blank" onclick="return false">
                        <div class="redimensionar5"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">RSS</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="https://netbeans.apache.org/" target="_blank">
                        <div class="redimensionar6"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">NetBeans</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="https://www.apachefriends.org/es/index.html" target="_blank">
                        <div class="redimensionar7"></div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">XAMPP</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



