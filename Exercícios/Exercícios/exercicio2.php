<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 2</title>
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
    <p class="texto"> Exercício 2</p>
    <form action='exercicio2.php' method='POST'>
        Coloque o primeiro número:
        <input type='number' name='numero1' id='numero1'>
        <br>
        <br>
        <input type='submit' value='É divisível?' class="botao">
    </form>
    <?php
    if(isset($_POST['numero1'])){
        $numero = $_POST['numero1'];
        if($numero%10==0){
                echo "É divisível por 10!";
                echo '<br>';
                echo "É divisível por 5!";
                echo '<br>';
                echo "É divisível por 2!";
        }elseif($numero%5==0){
            echo "É divisível por 5!";
        }elseif($numero%2==0){
            echo "É divisível por 2!";
        }else{
            echo "Não é divisível por nenhum!";
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