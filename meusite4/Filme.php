<?php 

class Filme {
    private $table = "filme";

    private $conn;

    public $id;
    public $titulo;
    public $ano;
    public 

    public function __construct($conn = null) {
        $this->conn = $conn;
    }

    public findAll() {
        $query = "SELECT * FROM $this -> table";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $result = $stmt->fetchAll();




        -- 

