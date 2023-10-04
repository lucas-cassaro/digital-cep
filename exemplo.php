<?php

require_once "vendor/autoload.php";

use LucasCassaro\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('83331210');
print_r($resultado);