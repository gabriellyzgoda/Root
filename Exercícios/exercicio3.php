<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 3</title>
</head>
<body>
    <form action='exercicio3.php' method='POST'>
        Digite seu nome:
        <input type='text' name='nome'>
        <br>
        Digite seu sexo (F = Feminino; M = Masculino):
        <input type='text' name='sexo'>
        <br>
        Digite sua idade:
        <input type='text' name='idade'>
        <input type='submit' value='Cadastrar'>
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
    <a href= "index.php">Voltar</a>
</body>
</html>