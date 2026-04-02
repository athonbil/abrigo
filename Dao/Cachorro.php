<?php
class Cachorro extends Model_Cachorro
{
    private $db;
    public function  __construct($db)
    {
        $this->db = $db;    
    }
    public function criarCachorro($nome, $raca, $porte){
        $sql = "INSERT INTO cachorros (nome, raca, porte) VALUES (:nome, :raca, :porte)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':raca', $raca);
        $stmt->bindParam(':porte', $porte);
        return $stmt->execute();
    }
}
?>