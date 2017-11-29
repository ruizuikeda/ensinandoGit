<?php
/***********************************
** BIBLIOTECAS
************************************/
require_once '../include/db.php';
require_once '../include/phpLib.php';



/***********************************
** PARAMETROS DE ENTRADA
************************************/
$nome           = (string)$_POST['nome'];
$senha          = (string)$_POST['senha'];
$idUsuario      = (int)$_POST['idUsuario'];



/***********************************
** INSERT OU UPDATE
************************************/
if($idUsuario) {
    /***********************************
    ** UPDATE
    ************************************/
    $atualizei = update_usuario($idUsuario, $nome, $senha);
    if(!$atualizei) {
        echo 'ERROR!!!!!';
        exit;
    }
} else {
    /***********************************
    ** INSERT
    ************************************/
    
    /***********************************
    ** VAMOS INSERIR NO DB
    ************************************/
    $idUsuario = insert_usuario($nome, $senha);
    if(!$idUsuario) {
        echo 'ERROR!!!!!';
        exit;
    }
}







/***********************************
** SUCESSO !
************************************/
header('Location: ../comBanco.php?msg=1');
exit;