<?php
error_reporting(0);
?>
<?php 
include "conexao.php";
$sql = "select * from dasos_usuario";
try
{ /// preparação para consulta
	$stmt=$conexao->prepare($sql);
	$stmt->execute(); 
	$results=$stmt->fetchAll();
	
}
catch(Exception $ex)
{
	echo($ex -> getMessage());
}

foreach ($results as $output) {
	$new = crc32($output["senha"]); // adicionar criptografia de sua escolha a senha
	$id = $output["id"]; // receber id do usuario
	$upsdt = "update ms_usuario set senha = '$new' where id = '$id'"; // receber comando sql
	/// preparação para update
	$chash=$conexao->prepare($upsdt);
	$chash->execute(); 
	$updates=$chash->fetchAll();
}
?>
