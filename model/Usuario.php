<?php

require_once 'UsuarioPDO.php';

class Usuario {

    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numAccesos;
    private $fechaHoraUltimaConexion;
    private $perfil;
    private $listaOpinionesUsuario;

    public function __construct($codUsuario, $password, $descUsuario, $numAccesos, $fechaHoraUltimaConexion, $perfil) {
        $this->codUsuario = $codUsuario;
        $this->password = $password;
        $this->descUsuario = $descUsuario;
        $this->numAccesos = $numAccesos;
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
        $this->perfil = $perfil;
    }

    public function getCodUsuario() {
        return $this->codUsuario;
    }

    public function setCodUsuario($codUsuario) {
        $this->codUsuario = $codUsuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getDescUsuario() {
        return $this->descUsuario;
    }

    public function setDescUsuario($descUsuario) {
        $this->descUsuario = $descUsuario;
    }

    public function getNumAccesos() {
        return $this->numAccesos;
    }

    public function setNumAccesos($numAccesos) {
        $this->numAccesos = $numAccesos;
    }

    public function getFechaHoraUltimaConexion() {
        return $this->fechaHoraUltimaConexion;
    }

    public function setFechaHoraUltimaConexion($fechaHoraUltimaConexion) {
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    public function getListaOpinionesUsuario() {
        return $this->listaOpinionesUsuario;
    }

    public function setListaOpinionesUsuario($listaOpinionesUsuario) {
        $this->listaOpinionesUsuario = $listaOpinionesUsuario;
    }

    public static function validarUsuario($codUsuario, $password) {
        $usuario = null;
        $a_usuario = UsuarioPDO::validarUsuario($codUsuario, $password);
        if (!empty($a_usuario)) {
            $usuario = new Usuario($codUsuario, $password, $a_usuario['T01_DescUsuario'], $a_usuario['T01_NumAccesos'], $a_usuario['T01_FechaHoraUltimaConexion'], $a_usuario['T01_Perfil']);
        }
        return $usuario;
    }

    public static function altaUsuario($codUsuario, $password, $descUsuario) {
        $usuario = null;
        $a_usuario = UsuarioPDO::altaUsuario($codUsuario, $password, $descUsuario);
        if (!empty($a_usuario)) {
            $usuario = new Usuario($codUsuario, $password, $descUsuario, $a_usuario['T01_NumAccesos'], $a_usuario['T01_FechaHoraUltimaConexion'], $a_usuario['T01_Perfil']);
        }
        return $usuario;
    }

    public function modificarUsuario($password, $descUsuario, $perfil) {
        $codUsuario = $this->getCodUsuario();
        $usuario = null;
        if ($perfil == null) {
            $a_usuario = UsuarioPDO::modificarUsuario($codUsuario, $password, $descUsuario);
        } else {
            $a_usuario = UsuarioPDO::modificarCuenta($codUsuario, $password, $descUsuario, $perfil);
        }

        if (!empty($a_usuario)) {
            $usuario = new Usuario($a_usuario['T01_CodUsuario'], $a_usuario['T01_Password'], $a_usuario['T01_DescUsuario'], $a_usuario['T01_NumAccesos'], $a_usuario['T01_FechaHoraUltimaConexion'], $a_usuario['T01_Perfil']);
        }
        return $usuario;
    }

    public function borrarUsuario() {
        $codUsuario = $this->getCodUsuario();
        $borrado = UsuarioPDO::borrarUsuario($codUsuario);
        return $borrado;
    }

    public function registrarUltimaConexion() {
        setlocale(LC_TIME, 'es_ES.UTF-8');
        date_default_timezone_set('Europe/Madrid');
        $codUsuario = $this->getCodUsuario();
        $a_fechaAccesos = UsuarioPDO::registrarUltimaConexion($codUsuario);
        $fecha = date('d-m-Y, H:i:s', $a_fechaAccesos['T01_FechaHoraUltimaConexion']);
        $numAccesos = $a_fechaAccesos['T01_NumAccesos'];

        if ($this->getNumAccesos() == 0) {
            $ultimaConexion = 'Bienvenid@ por primera vez, ' . $this->getDescUsuario() . '.';
        } else {
            $ultimaConexion = 'Hola de nuevo ' . $this->getDescUsuario() . ', número de visitas anteriores ' . $this->getNumAccesos() . '.<br>Última vez ' . $fecha . '.';
        }
        return $ultimaConexion;
    }

    public static function validarCodNoExiste($codUsuario) {
        $existe = UsuarioPDO::validarCodNoExiste($codUsuario);
        return $existe;
    }

    public static function buscaUsuariosPorDesc($descUsuario, $pagina, $registrosPagina) {
        
    }

    public function creaOpinion() {
        
    }

    public function modificaOpinion() {
        
    }

    public function borraOpinion() {
        
    }

    public static function buscaUsuariosPorCodigo($codUsuario) {
        
    }

    public static function contarUsuariosPorDesc($descUsuario) {
        
    }

}
