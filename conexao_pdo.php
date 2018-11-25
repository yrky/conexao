<?php

	$usuario="root";
	$senha="123456";
	$servidor="localhost";
	$banco="contatos";

	try{
		$db = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
		echo "Conexao OK";
	}
	catch(PDOException $e){
		echo $e->getMessage();	
	}

  ?>