<?php

class usuarioDTO {

    private $idusuario;
    private $usuario;
    private $senha;
    private $email;
    private $perfil_idperfil;

    function getIdusuario() {
        return $this->idusuario;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }
    function getEmail() {
        return $this->email;
    }

    function getPerfil_idperfil() {
        return $this->perfil_idperfil;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }
    function setEmail($email) {
        $this->email = $email;
    }

    function setPerfil_idperfil($perfil_idperfil) {
        $this->perfil_idperfil = $perfil_idperfil;
    }

}
