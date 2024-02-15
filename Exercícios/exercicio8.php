<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 8</title>
</head>
<body>
    <form action='exercicio8.php' method='POST'>
        Digite quantas vezes você quer que apareça a palavra SOL:
        <input type='number' name='sol'>
        <br>
        <input type='submit' value='Imprimir'>
    </form>
    <?php
        if(isset($_POST['sol'])){
        $numero = $_POST['sol'];
        for($i = 0; $i < $numero; $i++){
            echo "SOL";
            echo "<br>";
        }
    }
    ?> 
    <br>
    <a href= "index.php">Voltar</a>
</body>
</html>