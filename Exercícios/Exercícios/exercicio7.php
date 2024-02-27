<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 7</title>
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
    <p class="texto"> Exercício 7</p>
    <form action='exercicio7.php' method='POST'>
        Digite o nome do livro que será emprestado:
        <input type='text' name='livro'>
        <br>
        Digite se você é Professor (P) ou Aluno (A):
        <input type='text' name='usuario'>
        <br>
        <br>
        <input type='submit' value='Imprimir recibo!' class="botao">
    </form>
    <?php
        $livro = $_POST['livro'];
        $usuario = $_POST['usuario'];
        if($usuario == "P"){
            echo "Você tem 10 dias para devolver o livro: " . $livro;
        }if($usuario == "A"){
            echo "Você tem 3 dias para devolver o livro: " . $livro;
    }
    ?> 
    <br>
    <br>
    <a href= "index.php">Voltar</a>
    <center>
</div>
</body>
</html>