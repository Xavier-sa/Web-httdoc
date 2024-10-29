<?php 

//variaveis
$nome = "XAVIER";


$nome ="Wellington Xavier";//se eu criar um nova variavel
var_dump($nome);


$inteiro=10;
var_dump($inteiro);

$float=10.99;
var_dump($float);

$boleano = TRUE; //FALSE
var_dump($boleano);

$boleano = FALSE; //TRUE
var_dump($boleano);

//ARRAYS 

$produtos = [
   " controle",
   " mause",
   " chave" ,
   1,
   30
];
//var_dump($produtos);
$produtos[1] = "Mouse";



//array associativo
$produtos2 = [
    "nome" => "controle",
    "preco" => "29.99",
    "descricao" => "Controle remoto de receptor skygato"
];    

// var_dump($produtos2);


//array multidimensional
$produtosDaLoja =[
        [
            "nome"=>"Monitor Full HD",
            "descricao"=>"Lorem ipsum ",
            "preco"=>1099.99,
            "imagem"=>"https://images7.kabum.com.br/produtos/fotos/103167/monitor-games-asus-49-super-ultrawide-curvo-hdmi-display-port-freesync-2-hdr-144-hz-xg49vq_monitor-games-asus-49-super-ultrawide-curvo-hdmi-display-port-freesync-2-hdr-144-hz-xg49vq_1565705823_g.jpg"
        ],

        [
            "nome"=>"Teclado Mecânico",
            "descricao"=>"Lorem ipsum ",
            "preco"=>699.99,
            "imagem" => "https://images6.kabum.com.br/produtos/fotos/401376/teclado-gamer-redragon-lakshmi-switch-brown-layout-60-abnt2-preto-k606-og-bk-gy-pt-brown-_1700577178_g.jpg"
        
        ],
        [
        ],
        [
        ],
        [
        ]
]
// var_dump($produtosDaLoja);

//tag Fechamentoo
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet"  href="css/style.css">


</head>

<body>

<h1>Olá <?php echo $nome?>,Seja Bem Vindo  </h1>
   <?php  echo "APRENDENDO DO JEITO CORRETO"; ?>
    <ul>
    <li>
            <li><?php echo $produtos[0]?></li>
            <li><?php echo $produtos[1]?></li>
            <li><?php echo $produtos[2]?></li>
    </li>
       
</ul>
<p>array associativo</p>
    <ul>
        <li>
            <p>Nome: <?php echo $produtos2['nome'];?> </p>
            <p>Preço: <?php echo $produtos2['descricao'];?></p>
            <p>Descrição: <?php echo $produtos2['preco'];?></p>
        </li>
    </ul>

    <p>array multidimensional</p>
    <ul>
        <li>
        
            <p>Nome:<?php echo $produtosDaLoja[0]['nome'];?></p>
            <p>
                <img width="200px" src=" <?php echo $produtosDaLoja[3]['imagem'];?>"
            </p>
            <p>Descrição: <?php echo $produtosDaLoja[1]['descricao'];?></p>
            <p>Preço <?php echo $produtosDaLoja[2]['preco'];?><</p>
        </li>
    </ul>
</body>
</html>




    