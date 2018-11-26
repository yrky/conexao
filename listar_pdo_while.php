<?php

	include_once('conexao_pdo.php');

	$sql = "SELECT * FROM usuarios";
	$resultado = $db->prepare($sql);
	$resultado -> execute();

	while($row = $resultado -> fetch(PDO::FETCH_ASSOC)){
		echo "ID: " . $row['id'] . "<br>";
		echo "NOME: " . $row['nome'] . "<br>";
		echo "EMAIL: " . $row['email'] . "<br>";
		echo "USUARIO: " . $row['usuario'] . "<br><hr>";
	}


  ?>


