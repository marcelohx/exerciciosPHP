<?php
    $num1 = 0;
    $num2 = 0;

    function somar($num1, $num2){
        return $num1 + $num2;
    }//Fim do metodo

    function subtrair($num1, $num2){
        return $num1 - $num2;
    }//Fim do metodo

    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }//Fim do metodo

    function dividir($num1, $num2){
        if($num2 > 0){
            return $num1 / $num2;
        }else{
            return "Impossivel dividir por zero!"; 
        }
    }//Fim do metodo

    function mostrarNumeros($num1,$num2){
        $resultado = "";
        for($i=$num1; $i<= $num2; $i++){
            $resultado .= "\n".$i;
        }//Fim do for
        return $resultado;
    }//Fim do metodo

    function verificarNumero($num1){
        if($num1 > 0){
            return "\nO número ".$num1. " é positivo!";
        }elseif($num1 < 0){
            return "\nO número".$num1. " é negativo!";
        }else{
            return "\nO número".$num1. " é zero!";
        }
    }

    function tabuada($num1){
        $resultado = "";
        for($i=0;$i<=10;$i++){
            $resultado .= "\n".$num1."*".$i."=".($num1*$i);
        }
        return $resultado;
    }

    function fatorial($num1){
        $fatorial = 1;
        while ($num1 > 1){
            $fatorial *= $num1;
            $num1 -= 1;
        }
        return "\nO fatorial do número digitado é ".$fatorial;
    }

    function raizPotencia($num1){
        return Math.Pow($num1);//potencia
        return Math.sqrt($num1);//raiz
    }

    
?>