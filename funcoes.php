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
        }//Fim do if
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
        }//Fim do if
    }//Fim do metodo

    function tabuada($num1){
        $resultado = "";
        for($i=0;$i<=10;$i++){
            $resultado .= "\n".$num1."*".$i."=".($num1*$i);
        }//Fim do for
        return $resultado;
    }//Fim do metodo

    function fatorial($num1){
        $fatorial = 1;
        while ($num1 > 1){
            $fatorial *= $num1;
            $num1 -= 1;
        }//Fim do while
        return "\nO fatorial do número digitado é ".$fatorial;
    }//Fim do metodo

	function potencia($num1, $num2){
        return "\nA potencia de ".$num1." é ". (pow($num1, $num2));//potencia  
    }//Fim do metodo

    function raiz($num1){
        return "\nA raiz de ".$num1." é ". (sqrt($num1));//raiz
    }//Fim do metodo

	function parImpar($num1){
        if ($num1 % 2 == 0){
            return "\nO numero digitado é par";
        }else{
            return "\nO numero digitado é impar";
        }//Fim do if
    }//Fim do metodo
    
    function ordemCrescente($num1,$num2){
        if($num1>$num2){
            return "\nO primeiro numero é maior que o segundo numero";
        }else{
            return "\nO segundo numero é maior que o primeiro numero";
        }//Fim do if
    }//Fim do metodo

    function mediaNotas($num1, $num2, $num3){
        $media = 0;
        $media = ($num1 + $num2 + $num3) / 3;
        return "\nA media das notas é de: ".$media ; 
        
    }//Fim do metodo

    function vogais($str){
        $cont = strlen($str);//Conta quantas caracteres tem dentro da string
        $contar = 0;
        $verificar = "";
        for($i=0;$i<$cont;$i++){
            $verificar = substr($str, $i, 1);//substr(navega por dentro da string)
            if(($verificar == 'a') || ($verificar == 'e') || ($verificar == 'i') || ($verificar == 'o') ||($verificar == 'u')){
                $contar++;
            }
        }//Fim do for
        return "\nExistem ".$contar." vogais na palavra!";
    }//Fim do metodo

    function inverterString(string $texto){
        return strrev($texto);//Biblioteca que inverte o texto
    }//Fim do metodo

    function primo($num1){
        if (($num1 % 2 == 0) || ($num1 % 3 == 0) || ($num1 % 5 == 0)){
            return "\nO número não é primo";
        }else if(($num1 == 2) || ($num1 == 3) || ($num1 == 0)){
            return "\nO número é primo";
        }else{
            return "\nO número é primo";
        }//Fim do if
    }//Fim do metodo

    function exercicioUm($num1,$num2){
        return "\nO valor de ".$num1."+".$num2."*".$num1." é: ".(($num1 + $num2) * $num1);
    }//Fim do metodo

    function exercicioTres($num1){
        return "\n15% de ".$num1." é ".(($num1 * 15) / 100);
    }//Fim do metodo

    function exercicioQuatro($num1){
        return "\n5% de ".$num1." é ".(($num1 * 5) / 100)."\n50% de ".$num1." é ".(($num1 * 50) / 100);
    }//Fim do metodo

    function exercicioCinco($num1,$num2){
        return "\nO quadrado de ".$num1." é ".($num1*$num1)."\nO quadrado de ".$num2." é ".($num2*$num2);
    }//Fim do metodo

    function exercicioSeis($num1){
        return "\nA velocidade ".$num1."m/s em Km/h é ". ($num1 * 3.6)."Km/h"; 
    }//Fim do metodo

    function exercicioSete($peso,$altura){
        return "\nO IMC com base na altura e peso fornecido é de: ". (($altura*$altura)/$peso);
    }//Fim do metodo

    function exercicioOito($num1){
        return "\nCom o desconto de 9% o valor de ".$num1." foi para ".((($num1 * 9) / 100) - $num1);
    }//Fim do metodo

    function exercicioNove($num1){
        return "\nCom o desconto de 7% o valor de ".$num1." foi para ".((($num1 * 7) / 100) - $num1);
    }//Fim do metodo

    function exercicioDez($altura,$comprimento,$largura){
        return "\nO volume da caixa retangular é de: ". ($comprimento * $largura * $altura);
    }//Fim do metodo

    function exercicioOnze($num1){
        return "\n27% de ".$num1." é ".(($num1 * 27) / 100);
    }//Fim do metodo

    function exercicioDoze($base,$altura){
        return "\nA area do trapezio é: ". ((($base * 2) * $altura)/ 2);
    }//Fim do metodo

    function exercicioTreze($nota1,$nota2, $nota3){
        $peso2 = $nota1 * 2;
        $peso3 = $nota2 * 3;
        $peso5 = $nota3 * 5;
        return "\nA media ponderada das 3 notas é: ". (($peso2 + $peso3 + $peso5)/3);
    }//Fim do metodo

    function exercicioQuatorze($num1){
        $valorPorcentagem  = (($num1 * 27) / 100) + $num1;
        $valorParcelado = $valorPorcentagem / 10;
        return "\nO Valor total foi de R$".$valorPorcentagem." e o valor parcelado em 10x é de: R$".$valorParcelado;
    }//Fim do metodo

    function exercicioQuinze($km, $litros){
        return "\nO consumo medio do veiculo foi de: ". $km / $litros;
    }//Fim do metodo
?>