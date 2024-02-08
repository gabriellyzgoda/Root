<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 4</title>
</head>
<body>
    <form action='exercicio4.php' method='POST'>
        Digite o primeiro número:
        <input type='number' name='numero1'>
        <br>
        Digite o segundo número:
        <input type='number' name='numero2'>
        <br>
        Digite o terceiro número:
        <input type='number' name='numero3'>
        <input type='submit' value='Decrescente'>
    </form>
    <?php
        if(isset($_POST['numero1']) and isset($_POST['numero2']) and isset($_POST['numero3'])){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
        if($numero1 >= $numero2 && $numero1 >= $numero3){
            if($numero2 >= $numero3){
                echo "Em ordem decrescente os três números ficam: " . "<br>" . $numero1 . "<br>" . $numero2 . "<br>" . $numero3;
            }else{
                echo "Em ordem decrescente os três números ficam: " . "<br>" . $numero1 . "<br>" . $numero3 . "<br>" . $numero2;
                echo "<br>";
            }  
        }elseif($numero2 >= $numero1 && $numero2 >= $numero3){
            if($numero1 >= $numero3){
                echo "Em ordem decrescente os três números ficam: " . $numero2 . "<br>" . $numero1 . "<br>" . $numero3;
                echo "<br>";
            }else{
                echo "Em ordem decrescente os três números ficam: " . $numero2 . "<br>" . $numero3 . "<br>" . $numero1;
                echo "<br>";
            }
        }else{
            if($numero1 >= $numero2){
                echo "Em ordem decrescente os três números ficam: " . $numero3 . "<br>" . $numero1 . "<br>" . $numero2;
                echo "<br>";
            }else{
                echo "Em ordem decrescente os três números ficam: " . $numero3 . "<br>" . $numero2 . "<br>" . $numero1;
                echo "<br>";
            }
        }
    }
    ?> 
    <br>
    <a href= "index.php">Voltar</a>
</body>
</html>