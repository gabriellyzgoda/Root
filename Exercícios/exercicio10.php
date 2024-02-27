<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 10</title>
</head>
<body>
    <form action='exercicio10.php' method='POST'>
        Digite uma palavra:
        <input type='text' name='palavra'>
        <br>
        <input type='submit' value='Imprimir'>
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
            echo $str;
        }
        echo "<br>";
        for($i = 0; $i < 3; $i++){
            echo $str;
        }
        echo "<br>";
        for($i = 0; $i < 4; $i++){
            echo $str;
        }
        echo "<br>";
    }
    ?> 
    <br>
    <a href= "index.php">Voltar</a>
</body>
</html>