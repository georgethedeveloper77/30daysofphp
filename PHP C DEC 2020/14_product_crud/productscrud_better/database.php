<?php

<<<<<<< HEAD


=======
>>>>>>> 887e9a7d823db5fefc42be1e614538b4b196f8ec
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=productscrud_better', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $pdo;