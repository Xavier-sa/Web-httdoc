<?php

require __DIR__ ."\..\Model\Filme.php";

$filmeModel = new Filme($conn);
$filmes = $filmeModel->findAll(10);


// print_r($filmes);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
</head>
<body>
      <h1> Filme</h1>   
      <h3>Titulo <?php echo $filme->titulo ?></h3>   
      <p> Ano<?php echo $filme-> ano ?>  </p> 
      <p> Descricao <?php echo $filme-> descricao?> </p>  
      
</body>
</html>