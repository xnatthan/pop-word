<?php

// Conexão com o BD
require_once 'conexao/conexao.php';

// Inicio da class usuarioDAO
class UsuarioDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    // INSERT
    public function salvar(UsuarioDTO $usuarioDTO) {
        try {
            $sql = "INSERT INTO usuario (usuario,email, senha, perfil_idperfil)
                    VALUES (?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getUsuario());
            $stmt->bindValue(2, $usuarioDTO->getEmail());
            $stmt->bindValue(3, $usuarioDTO->getSenha());
            $stmt->bindValue(4, $usuarioDTO->getPerfil_idperfil());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

// SELECT TODOS
    public function selecionaTds() {
        try {
            $sql = "SELECT * FROM usuario
                    inner join perfil on idperfil=perfil_idperfil";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //SELECT UNICO
    public function selecionaID($idusuario) {
        try {
            $sql = "SELECT * FROM usuario where idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //DELETE
    public function excluir($idusuario) {
        try {
            $sql = "DELETE FROM usuario where idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //UPDATE 
    public function alterar(usuarioDTO $usuarioDTO) {
        try {
            $sql = "UPDATE usuario SET usuario=?,
                                perfil_idperfil=?
                                WHERE idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getUsuario());
            $stmt->bindValue(2, $usuarioDTO->getPerfil_idperfil());
            $stmt->bindValue(3, $usuarioDTO->getIdusuario());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
