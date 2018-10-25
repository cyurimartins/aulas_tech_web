<?php

echo "<h1> Teste de conexao com o banco de dados</h1>";

$dsn = 'mysql:dbname=A002;host=127.0.0.1';
$user = 'root';
$password = '';
try {
 $dbh = new PDO($dsn, $user, $password);
 echo "<h2>Conectado com sucesso!</h2>";
} catch (PDOException $e) {
 echo 'Connection failed error: ' . $e->getMessage();
}


?>
