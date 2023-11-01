<?php

require_once '../dto/usuarioDTO.php';
require_once '../dao/usuarioDAO.php';
//dados do formulario
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);
$perfil_idperfil = $_POST["perfil_idperfil"];

$usuarioDTO = new usuarioDTO();
$usuarioDTO->setUsuario($usuario);
$usuarioDTO->setEmail($email);
$usuarioDTO->setSenha($senha);
$usuarioDTO->setPerfil_idperfil($perfil_idperfil);

$usuarioDAO = new usuarioDAO();
$sucesso = $usuarioDAO->salvar($usuarioDTO);

if ($sucesso) {
    echo "<script>";
    echo"window.location.href='../view/formCadastroUsuario.php' ";
    echo "</script> ";
}