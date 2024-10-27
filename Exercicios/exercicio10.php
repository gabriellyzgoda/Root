<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 10</title>
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
    <p class="texto"> Exercício 10</p>
    <form action='exercicio10.php' method='POST'>
        Digite uma palavra:
        <input type='text' name='palavra'>
        <br>
        <br>
        <input type='submit' value='Imprimir' class="botao">
    </form>
    <?php
    if(isset($_POST['palavra'])){
    $str = $_POST['palavra'];
    $str = strtoupper($str);
        for($i = 0; $i < 1; $i++){
            echo $str;
        }
        echo "<br>";
        for($i = 0; $i < 2; $i++){
            echo $str . ' ';
        }
        echo "<br>";
        for($i = 0; $i < 3; $i++){
            echo $str . ' ';
        }
        echo "<br>";
        for($i = 0; $i < 4; $i++){
            echo $str . ' ';
        }
        echo "<br>";
    }
    ?> 
    <br>
    <br>
        <a href= "index.php">Voltar</a>
    <center>
</div>
</body>
</html>