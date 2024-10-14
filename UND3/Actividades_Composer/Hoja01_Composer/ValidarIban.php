<?php

require 'vendor/autoload.php';
use Validator\IbanValidator;

$validator = new IbanValidator();
$resultado = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $iban = $_POST['iban'] ?? '';
    $ccc = $_POST['ccc'] ?? '';

    if ($validator->validarIBAN($iban)) {
        $resultado = 'IBAN válido';
    } else {
        $resultado = 'IBAN inválido';
    }

    if ($validator->validarCCC($ccc)) {
        $resultado .= ' y CCC válido';
    } else {
        $resultado .= ' y CCC inválido';
    }

    echo $resultado;
    
}
?>