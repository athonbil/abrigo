<?php
require __DIR__ . '/../Models/Model_Cachorro.php';
require __DIR__ . '/../Dao/Cachorro.php';
class AnimalsController
{
    // simulei uma lista de cachorros para exemplificar a funcionalidade, professor disse que tava tudo bem. 
    public function listarCachorros()
    {
        $cachorros = [
            new Cachorro("Tiranossauro", "Vira-lata", "Médio"),
            new Cachorro("Aniquilador", "Pug", "Pequeno"),
            new Cachorro("PEN Test", "Pinscher", "Pequeno"),
            new Cachorro("Cupcake", "Pitbull", "Grande"),
            new Cachorro("Besta Wildmutt Vulpemancer", "Poodle", "Médio"),
        ];

        return $cachorros;
    }
}

?>  