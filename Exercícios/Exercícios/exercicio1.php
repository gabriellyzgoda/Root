<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 1</title>
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
    <center>
    <br>
    <p class="texto"> Exercício 1</p>
    <form action='exercicio1.php' method='POST'>
        Coloque o primeiro número:
        <input type='number' name='numero1' id='numero1'>
        Coloque o segundo número:
        <input type='number' name='numero2' id='numero2'>
        <br>
        <br>
        <input type='submit' value='Somar' class="botao">
    <?php
    if(isset($_POST['numero1']) and isset($_POST['numero2'])){
    $numero = $_POST['numero1'];
    $numerodois = $_POST['numero2'];
    $total = $numero + $numerodois;
    if($total > 20){
            echo "<br>";
            echo "Resposta: " . $total + 8;
    }else{
            echo "<br>";
            echo "Resposta: " . $total - 5;
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