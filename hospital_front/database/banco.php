<?php

$host = 'localhost';
$db = 'crud_hospitalliberdade';
$user = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
		echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}


$senha = $_POST["Senha"];

echo($senha);


$sql = "insert into paciente values(?)";
//echo $sql;


$stmt= $pdo->prepare($sql);

$stmt->execute([$senha]);


