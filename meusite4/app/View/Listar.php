<?php 
require __DIR__ ."\..\Model\Filme.php";
// require "../Model/Filme.php"



$filmeModel = new Filme($conn);
$filmes = $filmeModel->findAll();





?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
</head>
<body>
    <table border="1">
        <tbody>
            <!-- percorre a lista de resultados -->
            <?php foreach ($filmes as $filme) { ?>
                <tr>
                    <!-- escreve na tabela cada item retornado -->
                    <td><?php echo $filme->id ?></td>
                    <td><?php echo $filme->titulo ?></td>
                    <td><?php echo $filme->ano ?></td>
                    <td><?php echo $filme->descricao ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>