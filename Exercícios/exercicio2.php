<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 2</title>
</head>
<body>
    <form action='exercicio2.php' method='POST'>
        Coloque o primeiro número:
        <input type='number' name='numero1' id='numero1'>
        <input type='submit' value='É divisível?'>
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
    <a href= "index.php">Voltar</a>
</body>
</html>