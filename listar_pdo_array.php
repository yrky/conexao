<?php  

	include_once('conexao_pdo.php');

	$sql = "SELECT * FROM usuarios";
	$resultado = $db->prepare($sql);
	$resultado -> execute();

	$linha = $resultado -> fetchAll(PDO::FETCH_ASSOC);

	foreach($linha as $listar){
		echo "NOME: " . $listar['nome']. "<br>";
		echo "EMAIL: " . $listar['email']. "<br>";
		echo "USUARIO: " . $listar['usuario']. "<br>";
		echo "<hr>";
	}

?>