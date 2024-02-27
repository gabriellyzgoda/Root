<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Central</title>
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
        <p class="texto"> Exercícios </p>
        <form action='exercicio1.php' method='POST'>
        <input type='submit' value='Exercício 1:' class="botao">
        <br>
        <br>
    </form>
    <form action='exercicio2.php' method='POST'>
        <input type='submit' value='Exercício 2:' class="botao">
        <br>
        <br>
    </form>
    <form action='exercicio3.php' method='POST'>
        <input type='submit' value='Exercício 3:' class="botao">
        <br>
        <br>
    </form>
    <form action='exercicio4.php' method='POST'>
        <input type='submit' value='Exercício 4:' class="botao">
        <br>
        <br>
    </form>
    <form action='exercicio5.php' method='POST'>
        <input type='submit' value='Exercício 5:' class="botao">
        <br>
        <br>
    </form>
    <form action='exercicio6.php' method='POST'>
        <input type='submit' value='Exercício 6:' class="botao">
        <br>
        <br>
    </form>
    <form action='exercicio7.php' method='POST'>
        <input type='submit' value='Exercício 7:' class="botao">
        <br>
        <br>
    </form>
    <form action='exercicio8.php' method='POST'>
        <input type='submit' value='Exercício 8:' class="botao">
        <br>
        <br>
    </form>
    <form action='exercicio9.php' method='POST'>
        <input type='submit' value='Exercício 9:' class="botao">
        <br>
        <br>
    </form>
    <form action='exercicio10.php' method='POST'>
        <input type='submit' value='Exercício 10:' class="botao">
        <br>
        <br>
    </form>
    <center>
</div>
</body>
</html>