<?php  

	include_once('conexao_pdo.php');

	$sql = "SELECT * FROM usuarios";
	$resultado = $db->prepare($sql);
	$resultado -> execute();

	$linha = $resultado -> fetchAll(PDO::FETCH_OBJ);

	foreach($linha as $listar){
		echo "Email: " . $listar -> email . "<br>";
	}

?>