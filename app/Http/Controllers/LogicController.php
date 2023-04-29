<?php

namespace App\Http\Controllers;

class LogicController extends Controller
{

    //función para ordernar unos números dados y obtener el mayor número posible, a partir de un array.
    public function orderNumbers()
    {
        $numbers = [50, 2, 1, 9];

        //se convierten todos los números en string
        $numbersStr = array_map('strval', $numbers);

        // se ordenan los números en orden descendente según su concatenación
        usort($numbersStr, function($a, $b) {
            return strcmp($b . $a, $a . $b);
        });
    
        // se concatenan los números ordenados en un solo string
        $mayNumber = implode('', $numbersStr);
        return view('logic.order', ['result' => $mayNumber]);
    }

    // función que me dice en qué posición de una cadena, se encuentra la letra 'a'.
    public function verifyString()
    {

        $string = 'idioma';

        $pos = strpos($string, 'a'); // se busca la posición de la letra 'a'

        if ($pos !== false) { // Si la letra 'a' está presente en la cadena
            return view('logic.verifyString')->with('result', "El texto '$string' contiene la letra 'a' en la posición $pos");

        } else { // Si la letra 'a' no está en el string
            return view('logic.verifyString')->with('result', "El texto '$string' no contiene la letra 'a'");

        }

    }

}
