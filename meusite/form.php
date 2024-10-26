<?php

$nome = $_POST ['nome'];
$descricao = $_POST['descricao'];
$preco = (float) $_POST['preco'];
$valido = TRUE;

if ($preco < 10) {
    $valido = FALSE;
} 

if (!$valido) {
    echo "<h2> style=\"color: red;\"Produto inválido</h2>";
}


?>

<h1>Produto</h1>

<div style= "color : red;">
<p>Nome do produto: <?php echo $nome?></p>
<p>Descrição: <?php echo $descricao?></p>
<p>Preço: <?php echo $preco?></p></div>