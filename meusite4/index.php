<?php


require "Database.php";


$database = new Database(
    "localhost",
    3306,
    "root",
    "",
    "filmesdb"
);


var_dump($database);

$conn = $database->__createConnection();

var_dump($conn);

$stmt = $conn->prepare("SELECT * FROM filme");

$stmt->execute();

foreach($stmt as $row){
    print_r($row);
}

<body>
<table>
<tbody>
<?php foreach ($stmt as $row){?>
    <tr>
    <td><?php $row ["id"]?></td>
    <td><?php $row ["titulo"]?></td>
    <td><?php $row ["ano"]?></td>
    <td><?php $row ["descricao"]?></td>
    
    </tr>
<?php}?>
<t/body></t>