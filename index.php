<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
    <?php include 'funcoes.php'; ?>
    <form method="POST">
        <label>Primeiro Número: </label>
        <input type="text" name="num1" id="num1"/><br><br>

        <label>Segundo Número: </label>
        <input type="text" name="num2" id="num2"/><br><br>

        <label>Terceiro Número: </label>
        <input type="text" name="num3" id="num3"/><br><br>

        <label>Palavra: </label>
        <input type="text" name="str" id="str"/><br><br>

        <button>Calcular
            <?php
                $num1 = $_POST['num1'];//Coletar os dados
                $num2 = $_POST['num2'];//Coletar os dados
                $num3 = $_POST['num3'];//Coletar os dados
                $str = $_POST['str'];//Coletar os dados
            ?>
        </button><br><br>

        <textarea rows="10" cols="40" readonly fixed>
            <?php
                echo "\nA soma de ".$num1." com ".$num2. " é: ".somar($num1,$num2);//Mostrar na tela (o "." é o concatenar semelhante ao "+")
                echo "\nA subtração de ".$num1." com ".$num2." é: ".subtrair($num1,$num2);
                echo "\nA multiplicação de ".$num1." com ".$num2." é: ".multiplicar($num1,$num2);
                echo "\nA divisão de ".$num1." com ".$num2." é: ".dividir($num1,$num2);
                echo "\nA sequencia de numeros entre ".$num1." e ".$num2." é: ".mostrarNumeros($num1,$num2);
                echo verificarNumero($num1);
                echo tabuada($num1);
                echo fatorial($num1);
                echo potencia($num1, $num2);
                echo raiz($num1);
                echo parImpar($num1);
                echo ordemCrescente($num1,$num2);
                echo mediaNotas($num1,$num2,$num3);
                echo vogais($str);
                echo inverterString($str);
                echo primo($num1);
                echo exercicioUm($num1,$num2);
                echo exerciciotres($num1);
                echo exercicioQuatro($num1);
                echo exercicioCinco($num1, $num2);
                echo exercicioSeis($num1);
                echo exercicioSete($num1, $num2);
                echo exercicioOito($num1);
                echo exercicioNove($num1);
                echo exercicioDez($num1,$num2,$num3);
                echo exercicioOnze($num1);
                echo exercicioDoze($num1,$num2);
                echo exercicioTreze($num1,$num2,$num3);
                echo exercicioQuatorze($num1);
                echo exercicioQuinze($num1,$num2);
            ?>
        </textarea>
    </form>

</body>
</html>