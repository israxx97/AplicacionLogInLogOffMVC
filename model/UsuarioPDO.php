<?php

require_once 'DBPDO.php';
require_once 'UsuarioDB.php';
require_once 'config/configDB.php';

class UsuarioPDO implements UsuarioDB {

    public static function validarUsuario($codUsuario, $password) {
        try {
            $miDB = new PDO(HOST_DB, USER_DB, PASS_DB);
            $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $a_usuario = [];
            $sql = 'SELECT * FROM T01_Usuarios WHERE T01_CodUsuario = :codigo AND T01_Password = SHA2(:pass, 256)';
            $statement = $miDB->prepare($sql);
            $statement->bindParam(':codigo', $codUsuario);
            $statement->bindParam(':pass', $password);
            $statement->execute();

            if ($statement->rowCount() == 1) {
                $resultado = $statement->fetchObject();
                $a_usuario['T01_CodUsuario'] = $resultado->T01_CodUsuario;
                $a_usuario['T01_Password'] = $resultado->T01_Password;
                $a_usuario['T01_DescUsuario'] = $resultado->T01_DescUsuario;
                $a_usuario['T01_NumAccesos'] = $resultado->T01_NumAccesos;
                $a_usuario['T01_FechaHoraUltimaConexion'] = $resultado->T01_FechaHoraUltimaConexion;
                $a_usuario['T01_Perfil'] = $resultado->T01_Perfil;
            }
            return $a_usuario;
        } catch (PDOException $pdoe) {
            echo $pdoe->getMessage();
            unset($miDB);
        }
    }

    public static function altaUsuario($codUsuario, $password, $descUsuario) {
        
    }

    public function modificarUsuario($codUsuario, $password, $descUsuario) {
        
    }

    public function modificarCuenta($codUsuario, $password, $descUsuario, $perfil) {
        
    }

    public function borrarUsuario($codUsuario) {
        
    }

    public function registrarUltimaConexion($codUsuario) {
        
    }

    public static function validarCodNoExiste($codUsuario) {
        
    }

    public static function buscaUsuariosPorDesc($codUsuario) {
        
    }

    public static function buscaUsuariosPorDescripcion($descUsuario, $pagina, $registrosPagina) {
        
    }

    public static function contarUsuariosPorDesc($descUsuario) {
        
    }

    public function creaOpinion() {
        
    }

    public function modificaOpinion() {
        
    }

    public function borraOpinion() {
        
    }

}
