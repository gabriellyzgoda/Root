<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 5</title>
</head>
<body>
    <form action='exercicio5.php' method='POST'>
        Digite o primeiro lado do triângulo em cm:
        <input type='number' name='numero1'>
        <br>
        Digite o segundo lado do triângulo em cm:
        <input type='number' name='numero2'>
        <br>
        Digite o terceiro lado do triângulo em cm:
        <input type='number' name='numero3'>
        <br>
        <input type='submit' value='Qual triângulo é?'>
    </form>
    <?php
        if(isset($_POST['numero1']) and isset($_POST['numero2']) and isset($_POST['numero3'])){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
        if($numero1 == $numero2 && $numero1 == $numero3){
            echo "Esse triângulo é equilátero!";
        }elseif($numero2 != $numero1 && $numero2 == $numero3 && $numero2 == $numero1 && $numero2 != $numero3){
                echo "Esse triângulo é isóceles!";
        }else{
                echo "Esse triângulo é escaleno!";
        }
    }
    ?> 
    <br>
    <a href= "index.php">Voltar</a>
</body>
</html>