<?php 


require_once("config.php");

//carrega um usuário
//$root = new Usuario();
//$root->loadById(5);
//echo $root;


//Carrega uma lista de usuários

//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login

//$search = Usuario::search("jo");
//echo json_encode($search);


//Carrega um  usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "!@#$");

echo $usuario;


/*$sql = new Sql(); select de todos os dados

$usuarios = $sql->select("SELECT * FROM td_usuarios");

echo json_encode($usuarios);*/

 ?>