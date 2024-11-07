<?php

require "app/Config/Database.php";
// estabelece conexão com banco

$database = new Database(
    "localhost",
    3306,
    "root",
    "",
    "filmesdb"
);

$conn = $database->createConnection();

// require "app/View/Listar.php";
require "app/View/Visualizar.php";


?>

<!--  echo "<pre>";
print_r($filmeModel->findById(12));
echo "</pre>"; -->
