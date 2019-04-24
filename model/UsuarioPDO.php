<?php

require_once 'DBPDO.php';
require_once 'UsuarioDB.php';
require_once 'config/configDB.php';

class UsuarioPDO implements UsuarioDB {

    public static function validarUsuario($codUsuario, $password) {
        $a_usuario = [];
        $sql = 'SELECT * FROM T01_Usuarios WHERE T01_CodUsuario = ? AND T01_Password = SHA2(?, 256)';
        $statement = DBPDO::ejecutaConsulta($sql, [$codUsuario, $password]);

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
    }

    public static function altaUsuario($codUsuario, $password, $descUsuario) {
        $a_usuario = [];
        $fecha = new DateTime();
        $sql = "INSERT INTO T01_Usuarios (T01_CodUsuario, T01_Password, T01_DescUsuario, T01_FechaHoraUltimaConexion, T01_NumAccesos, T01_Perfil, T01_ImagenUsuario) VALUES (?, SHA2(?, 256), ?, ?, 0, 'usuario', NULL)";
        $statement = DBPDO::ejecutaConsulta($sql, [$codUsuario, $password, $descUsuario, $fecha->getTimestamp()]);

        if ($statement->rowCount() == 1) {
            $a_usuario['T01_CodUsuario'] = $codUsuario;
            $a_usuario['T01_Password'] = $password;
            $a_usuario['T01_DescUsuario'] = $descUsuario;
            $a_usuario['T01_FechaHoraUltimaConexion'] = $fecha->getTimestamp();
            $a_usuario['T01_Perfil'] = 'usuario';
            $a_usuario['T01_ImagenUsuario'] = 'NULL';
        }
        return $a_usuario;
    }

    public function modificarUsuario($codUsuario, $password, $descUsuario) {
        $a_usuario = [];

        if ($descUsuario == null) {
            $sql = 'UPDATE T01_Usuarios SET T01_Password = SHA2(?) WHERE T01_CodUsuario = ?';
            $statement = DBPDO::ejecutaConsulta($sql, [$password, $codUsuario]);
        } else {
            $sql = 'UPDATE T01_Usuarios SET T01_DescUsuario = ? WHERE T01_CodUsuario = ?';
            $statement = DBPDO::ejecutaConsulta($sql, [$descUsuario, $codUsuario]);
        }

        if ($statement->rowCount() == 1) {
            $sql = 'SELECT * FROM T01_Usuarios WHERE T01_CodUsuario = ?';
            $statement = DBPDO::ejecutaConsulta($sql, [$codUsuario]);

            if ($statement->rowCount() == 1) {
                $resultado = $statement->fetchObject();
                $a_usuario['T01_CodUsuario'] = $resultado->T01_CodUsuario;
                $a_usuario['T01_Password'] = $resultado->T01_Password;
                $a_usuario['T01_DescUsuario'] = $resultado->T01_DescUsuario;
                $a_usuario['T01_NumAccesos'] = $resultado->T01_NumAccesos;
                $a_usuario['T01_FechaHoraUltimaConexion'] = $resultado->T01_FechaHoraUltimaConexion;
                $a_usuario['T01_Perfil'] = $resultado->T01_Perfil;
            }
        }
        return $a_usuario;
    }

    public function modificarCuenta($codUsuario, $password, $descUsuario, $perfil) {
        
    }

    public function borrarUsuario($codUsuario) {
        $borrado = false;
        $sql = 'DELETE FROM T01_Usuarios WHERE T01_CodUsuario = ?';
        $statement = DBPDO::ejecutaConsulta($sql, [$codUsuario]);
        if ($statement->rowCount() == 1) {
            $borrado = true;
        }
        return $borrado;
    }

    public function registrarUltimaConexion($codUsuario) {
        $a_fechaAccesos = [];
        $fecha = new DateTime();
        $sql = 'SELECT * FROM T01_Usuarios WHERE T01_CodUsuario = ?';
        $statement = DBPDO::ejecutaConsulta($sql, [$codUsuario]);

        if ($statement->rowCount() == 1) {
            $resultado = $statement->fetchObject();
            $a_fechaAccesos['T01_NumAcceos'] = $resultado->T01_NumAccesos;
            $a_fechaAccesos['T01_FechaHoraUltimaConexion'] = $resultado->T01_FechaHoraUltimaConexion;
            $a_fechaAccesos['T01_DescUsuario'] = $resultado->T01_DescUsuario;
        }
        $sql1 = 'UPDATE T01_Usuarios SET T01_NumAccesos = T01_NumAccesos + 1, T01_FechaHoraUltimaConexion = ? WHERE T01_CodUsuario = ?';
        $statement1 = DBPDO::ejecutaConsulta($sql1, [$fecha->getTimestamp(), $codUsuario]);
        return $a_fechaAccesos;
    }

    public static function validarCodNoExiste($codUsuario) {
        $existe = false;
        $sql = 'SELECT * FROM T01_Usuarios WHERE T01_CodUsuario = ?';
        $statement = DBPDO::ejecutaConsulta($sql, [$codUsuario]);

        if ($statement->rowCount() == 1) {
            $existe = true;
        }
        return $existe;
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
