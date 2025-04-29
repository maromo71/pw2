<?php

function verificarTriangulo($lado1, $lado2, $lado3){
    if($lado1 + $lado2 > $lado3 && 
        $lado2 + $lado3 > $lado1 && 
            $lado1 + $lado3 > $lado2){
                return true;
            }else{
                return false;
            }
}

function tipoDeTriangulo($lado1, $lado2, $lado3){
    if($lado1 == $lado2 && $lado2 == $lado3){
        return "Equilátero";
    }else if ($lado1 == $lado2 || 
        $lado1 == $lado3 || 
        $lado2 == $lado3){
        return "Isósceles";
    }else{
        return "Escaleno";
    }
}

$a = $_POST['lado1'];
$b = $_POST['lado2'];
$c = $_POST['lado3'];

$ehTriangulo = verificarTriangulo($a, $b, $c);

if($ehTriangulo){
    echo "Os lados $a, $b e $c formam um triângulo.<br>";
    echo "Tipo de triangulo =>" . tipoDeTriangulo($a, $b, $c) . "<br>";
}else{
    echo "Os lados $a, $b e $c não formam um triângulo.";
}