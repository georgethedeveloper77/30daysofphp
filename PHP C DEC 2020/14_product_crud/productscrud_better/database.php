<?php



$pdo = new PDO('mysql:host=localhost;port=3306;dbname=productscrud_better', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $pdo;