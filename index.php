<?php
require_once __DIR__ . '/Models/Model_Cachorro.php';
require_once __DIR__ . '/Models/Cachorro.php';
require_once __DIR__ . '/Controllers/AnimalsController.php';

$animalController = new AnimalsController();
$cachorros = $animalController->listarCachorros();

require __DIR__ . '/Views/main.php';

?>
