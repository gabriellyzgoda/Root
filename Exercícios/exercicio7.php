<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 7</title>
</head>
<body>
    <form action='exercicio7.php' method='POST'>
        Digite o nome do livro que será emprestado:
        <input type='text' name='livro'>
        <br>
        Digite se você é Professor (P) ou Aluno (A):
        <input type='text' name='usuario'>
        <br>
        <input type='submit' value='Imprimir recibo!'>
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
    <a href= "index.php">Voltar</a>
</body>
</html>