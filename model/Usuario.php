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
        
    }

    public function modificarUsuario($password, $descUsuario, $perfil) {
        
    }

    public function borrarUsuario() {
        
    }

    public function registrarUltimaConexion() {
        
    }

    public static function validarCodNoExiste($codUsuario) {
        
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
