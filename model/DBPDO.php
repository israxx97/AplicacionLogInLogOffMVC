<?php

require_once 'config/configDB.php';

class DBPDO {

    public function ejecutaConsulta($sentenciaSQL, $parametros) {
        try {
            $miDB = new PDO(HOST_DB, USER_DB, PASS_DB);
            $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $statement = $miDB->prepare($sentenciaSQL);
            $statement->execute($parametros);
        } catch (PDOException $pdoe) {
            $statement = null;
            $pdoe->getMessage();
            unset($miDB);
        }
        return $statement;
    }

}
