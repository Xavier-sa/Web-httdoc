<?php // tag de abertura

// variaveis primitivas
$nome = "xavier";
$nome = "Wellington Xavier";
// var_dump($nome);

$inteiro = 10;
// var_dump($inteiro);

$float = 10.99;
// var_dump($float);

$boleano = TRUE; // FALSE
// var_dump($boleano);
$boleano = FALSE;
// var_dump($boleano);
// echo "<br>";

// arrays indexado
$produtos = [
    "Controle",
    "mouse",
    "Chave"
];
// var_dump($produtos);
// echo "<br>";
$produtos[1] = "Mouse";

// array associativo
$produto = [
    "nome" => "Controle",
    "preco" => 29.99,
    "descricao" => "Controle remoto de receptor SkyGato."
];
// var_dump($produto);

// array multidimensional
$produtosDaLoja = [
    [
        "nome" => "Monitor Full HD",
        "descricao" => "Monitor 21,5 Acer Full Hd Ek221q E3bi 100hz 1ms HDMI/vga",
        "preco" => 494.90,
        "imagem" => "https://images3.kabum.com.br/produtos/fotos/623773/monitor-acer-ultra-thin-sa240y-g0-23-8-led-ips-full-hd-120hz-1ms-hdmi-e-vga-adaptive-sync-um-qs0aa-005_1726076756_g.jpg"
    ],
    [
        "nome" => "Monitor Ultrawide",
        "descricao" => "Monitor LG 29 Ultrawide Full HD, LED, IPS, Freesync, HDMI - 29WK600-W",
        "preco" => 999.90,
        "imagem" => "https://images6.kabum.com.br/produtos/fotos/sync_mirakl/157586/Monitor-LG-29-Ultrawide-Full-HD-LED-IPS-Freesync-HDMI-29WK600-W_1729873219_g.jpg"
    ],
    [
        "nome" => "Teclado Logitech",
        "descricao" => "Teclado Gamer Sem Fio Logitech G Pro X com design TKL, Layout US, RGB LIGHTSYNC e Switch Exclusivo GX Brown Tactile, Branco - 920-012143",
        "preco" => 1647.05,
        "imagem" => "https://images9.kabum.com.br/produtos/fotos/495549/teclado-gamer-sem-fio-logitech-g-pro-x-com-design-tkl-layout-us-rgb-lightsync-e-switch-exclusivo-gx-brown-tactile-branco-920-012143_1696621518_g.jpg"
    ],
    [
        "nome" => "Teclado Redragon",
        "descricao" => "Teclado Gamer Redragon Lakshmi, Switch Brown, Layout 60%, ABNT2 , Preto - K606-OG&GY&BK (PT-BROWN)",
        "preco" => 149.99,
        "imagem" => "https://images5.kabum.com.br/produtos/fotos/401375/teclado-gamer-redragon-lakshmi-switch-brown-layout-60-abnt2-verde-k606-og-gy-bk-pt-brown-_1671624936_g.jpg"
    ]
];
// var_dump($produtosDaLoja);

// tag de fechamento
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Olá <?php echo $nome ?>, bem vindo!</h1>

    <p>Array Indexado</p>
    <ul>
        <li>
            <?php echo $produtos[0]; ?>
        </li>
        <li>
            <?php echo $produtos[1]; ?>
        </li>
        <li>
            <?php echo $produtos[2]; ?>
        </li>
    </ul>

    <p>Array Associativo</p>
    <ul>
        <li>
            <p>Nome: <?php echo $produto['nome'] ?></p>
            <p>Descrição: <?php echo $produto['descricao']?> </p>
            <p>Preço: <?php echo $produto['preco'] ?></p>
        </li>
    </ul>

    <p>Array Multidimensional</p>
    <!-- <ul>
        <li>
            <p>
                <?php echo $produtosDaLoja[0]['nome']; ?>
            </p>
            <p>
                <img width="200px" src="<?php echo $produtosDaLoja[0]['imagem']; ?>" alt="monitor">
            </p>
            <p>
                <?php echo $produtosDaLoja[0]['descricao']; ?>
            </p>
            <p>
                <?php echo $produtosDaLoja[0]['preco']; ?>
            </p>
        </li>
        <li>
            <p>
                <?php echo $produtosDaLoja[1]['nome']; ?>
            </p>
            <p>
                <img width="200px" src="<?php echo $produtosDaLoja[1]['imagem']; ?>" alt="monitor">
            </p>
            <p>
                <?php echo $produtosDaLoja[1]['descricao']; ?>
            </p>
            <p>
                <?php echo $produtosDaLoja[1]['preco']; ?>
            </p>
        </li>
        <li>
            <p>
                <?php echo $produtosDaLoja[2]['nome']; ?>
            </p>
            <p>
                <img width="200px" src="<?php echo $produtosDaLoja[2]['imagem']; ?>" alt="monitor">
            </p>
            <p>
                <?php echo $produtosDaLoja[2]['descricao']; ?>
            </p>
            <p>
                <?php echo $produtosDaLoja[2]['preco']; ?>
            </p>
        </li>
    </ul> -->
    <ul>
        <?php foreach ($produtosDaLoja as $produtoLoja) { ?>
            <li>
                <p> <?php echo $produtoLoja["nome"] ?> </p>
                <p>
                    <img 
                        width="200px"
                        src="<?php echo $produtoLoja["imagem"] ?>"
                        alt="<?php echo $produtoLoja["nome"] ?>"
                    >
                </p>
                <p> <?php echo $produtoLoja["descricao"] ?> </p>
                <p> R$ <?php echo $produtoLoja["preco"] ?> </p>
                <hr>
            </li>
        <?php } ?>
    </ul>
</body>
</html>