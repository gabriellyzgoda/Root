<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 5</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    .fundo {
        width: 100%;
        height:965px;
        background-image: url("fundo.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .texto{
        font-size: 70px;
        color: black;
    }
    .botao{
        display: inline-block;
        padding: .75rem 1.25rem;
        border-radius: 10px;
        color: black;
        background-color: #FOFFFF;
        text-transform: uppercase;
        font-size: 1rem;
        letter-spacing: .15rem;
        transition: all .3s;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
</style>
<body>
<div class="fundo">
<br>
    <center>
    <p class="texto"> Exercício 5</p>
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
        <br>
        <input type='submit' value='Qual triângulo é?' class="botao">
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
    <br>
    <a href= "index.php">Voltar</a>
    <center>
</div>
</body>
</html>