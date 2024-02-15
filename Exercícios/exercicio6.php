<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 6</title>
</head>
<body>
    <form action='exercicio6.php' method='POST'>
        Digite um número entre 1 e 12:
        <input type='number' name='numero'>
        <br>
        <input type='submit' value='Qual mês é?'>
    </form>
    <?php
        if(isset($_POST['numero'])){
        $numero = $_POST['numero'];
        if($numero == 1){
            echo "Janeiro☀️";
        }elseif($numero == 2){
            echo "Fevereiro☀️";
        }elseif($numero == 3){
            echo "Março🍁";
        }elseif($numero == 4){
            echo "Abril🍁";
        }elseif($numero == 5){
            echo "Maio🍁";
        }elseif($numero == 6){
            echo "Junho❄️";
        }elseif($numero == 7){
            echo "Julho❄️";
        }elseif($numero == 8){
            echo "Agosto❄️";
        }elseif($numero == 9){
            echo "Setembro🌹";
        }elseif($numero == 10){
            echo "Outubro🌹";
        }elseif($numero == 11){
            echo "Novembro🌹";
        }elseif($numero == 12){
            echo "Dezembro☀️";
        }else{
                echo "Não existe mês com este número";
        }
    }
    ?> 
    <br>
    <a href= "index.php">Voltar</a>
</body>
</html>