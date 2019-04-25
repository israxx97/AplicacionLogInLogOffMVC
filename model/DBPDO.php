<?php

require_once 'config/configDB_localhost.php';

class DBPDO {

    public static function ejecutaConsulta($sentenciaSQL, $parametros) {
        try {
            $miDB = new PDO(HOST_DB_localhost, USER_DB_localhost, PASS_DB_localhost);
            $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $statement = $miDB->prepare($sentenciaSQL);
            $statement->execute($parametros);
        } catch (PDOException $pdoe) {
            $statement = null;
            $pdoe->getMessage();
            $_SESSION['pagina'] = 'error';
            header('Location: index.php');
        } finally { 
            unset($miDB);
        }
        return $statement;
    }

}
