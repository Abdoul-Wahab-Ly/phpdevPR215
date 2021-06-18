<?php

/**
 * Permet de montrer un exemple d'utilisation des methodes de classe
 */

class Calcul
{
    /**
     * undocumented function 
     * @param int $a is variable a
     * @param int $b is variable b
     * @param int $resultat de l'addition de a et b 
     */

    public static function addition($a, $b)
    {
        return $a + $b;
    }

    public static function soustraction($a, $b)
    {
        return $a - $b;
    }
}

//Utilisation des methodes de classe

$val1 = 10;
$val2 = 6;

echo "$val1 + $val2 = " . Calcul::addition($val1, $val2) . '<br>';
echo "$val1 - $val2 = " . Calcul::soustraction($val1, $val2) . '<br>';
