<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 3</title>
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
    <p class="texto"> Exercício 3</p>
    <form action='exercicio3.php' method='POST'>
        Digite seu nome:
        <input type='text' name='nome'>
        <br>
        Digite seu sexo (F = Feminino; M = Masculino):
        <input type='text' name='sexo'>
        <br>
        Digite sua idade:
        <input type='text' name='idade'>
        <br>
        <br>
        <input type='submit' value='Cadastrar' class="botao">
    </form>
    <?php
        if(isset($_POST['sexo']) and isset($_POST['idade'])){
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $idade = $_POST['idade'];
        if($sexo == 'F' && $idade <= 25){
            echo $nome . " ACEITA.";
        }else{
            echo $nome . " NÃO ACEITA.";
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