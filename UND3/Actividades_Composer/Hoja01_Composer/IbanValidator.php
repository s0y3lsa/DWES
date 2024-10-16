<?php

namespace Validator;

use Brick\Math\BigInteger;

class IbanValidator
{

    public function validarIBAN(string $iban): bool
    {
        //eliminar espacios en blanco
        $iban = str_replace(' ', '', strtoupper($iban));

        //comprobar longitud
        if (strlen($iban) !== 24) {
            return false;
        }

        //comprobar que empieza por ES
        if (substr($iban, 0, 2) !== 'ES') {
            return false;
        }

        //mover los 4 primeros caracteres al final
        $rearrangedIban = substr($iban, 4) . '142800' . substr($iban, 2, 2); // E=14, S=28

        //convertir a numero grande 
        $bigNumber = BigInteger::of($rearrangedIban);

        //comprobar el mudulo 97
        return $bigNumber->mod(97)->toInt() === 1;
    }


    public function validarCCC(string $ccc): bool
    {
        if (strlen($ccc) !== 20) {
            return false;
        }

        $pesos = [1, 2, 4, 8, 5, 10, 9, 7, 3, 6];

        //validar primer digito de control
        $entidadOficina = substr($ccc, 0, 8);
        $primerDigitoControl = $this->calcularDigitoControl(substr('00' . $entidadOficina, -10), $pesos);

        //segundo digito 
        $numeroCuenta = substr($ccc, 10, 10);
        $segundoDigitoControl = $this->calcularDigitoControl($numeroCuenta, $pesos);

        return $primerDigitoControl == $ccc[8] && $segundoDigitoControl == $ccc[9];
    }


    private function calcularDigitoControl(string $cadena, array $pesos): int
    {
        $suma = 0;
        for ($i = 0; $i < 10; $i++) {
            $suma += $cadena[$i] * $pesos[$i];
        }

        $resto = $suma % 11;
        $resultado = 11 - $resto;

        if ($resultado == 11) {
            return 0;
        } elseif ($resultado == 10) {
            return 1;
        }

        return $resultado;
    }
}