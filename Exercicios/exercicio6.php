<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 6</title>
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
    <p class="texto"> Exercício 6</p>
    <form action='exercicio6.php' method='POST'>
        Digite um número entre 1 e 12:
        <input type='number' name='numero'>
        <br>
        <br>
        <input type='submit' value='Qual mês é?' class="botao">
    </form>
    <?php
        if(isset($_POST['numero'])){
        $numero = $_POST['numero'];
        if($numero == 1){
            echo "Janeiro☀️";
        }elseif($numero == 2){
            echo "Fevereiro☀️";
        }elseif($numero == 3){
            echo "Março🍁";
        }elseif($numero == 4){
            echo "Abril🍁";
        }elseif($numero == 5){
            echo "Maio🍁";
        }elseif($numero == 6){
            echo "Junho❄️";
        }elseif($numero == 7){
            echo "Julho❄️";
        }elseif($numero == 8){
            echo "Agosto❄️";
        }elseif($numero == 9){
            echo "Setembro🌹";
        }elseif($numero == 10){
            echo "Outubro🌹";
        }elseif($numero == 11){
            echo "Novembro🌹";
        }elseif($numero == 12){
            echo "Dezembro☀️";
        }else{
                echo "Não existe mês com este número";
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