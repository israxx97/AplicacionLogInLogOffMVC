<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#" onclick="return false">Ventana de inicio</a>
    <form name="formInicio" action="<?php echo $_SERVER['PHP_SELF']; ?>" action="POST">
        <input type="submit" id="cerrarSession" class="btn btn-secondary my-2 my-sm-0 btn-sm" name="cerrarSession" value="Log Out"/>
    </form>
</nav>

<h3>$GLOBALS</h3>
<?php
echo '<pre>';
print_r($GLOBALS);
echo '</pre>';


