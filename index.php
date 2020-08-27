<?php 


require_once("config.php");

$root = new Usuario();

$root->loadById(5);

echo $root;





/*$sql = new Sql(); select de todos os dados

$usuarios = $sql->select("SELECT * FROM td_usuarios");

echo json_encode($usuarios);*/

 ?>