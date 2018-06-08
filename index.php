<?php 

	require_once ("config.php");

	/* === Testando a classe sql === */
	/* $sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios); */

	/* ===================================================== */

	/* === Carrega um usuario === */
	/* $root = new Usuario();

	$root-> loadById(2);

	echo $root; */

	/* ===================================================== */

	/* ==== Carrega uma lista de usuario === */
	/* $lista = Usuario::getList();

	echo json_encode($lista); */

	/* ===================================================== */

	/* === Carrega uma lista buscando pelo login === */
	/* $search = Usuario::search("fe");

	echo json_encode($search); */

	/* ===================================================== */

	/* === Carrega um usuario usando o login e a senha === */

	/* $usuario = new Usuario();
	$usuario->login("Fernanda Piassa", "a1b2c3d4");

	echo $usuario; */

	/* ====================================================== */

	/* === INSERT criando um novo usuario === */

	/*$aluno = new Usuario("aluno", "@lun0");

	$aluno->insert();

	echo $aluno; */

   /* ======================================================= */

   /* === Update atualizando um novo usuario === */

   $usuario = new Usuario();

   $usuario->loadById(5);

   $usuario->update("professor", "pr0f3ss0r");

   echo $usuario;

 ?>