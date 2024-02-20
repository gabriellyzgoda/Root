<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 1</title>
</head>
<body>
    <form action='exercicio1.php' method='POST'>
        Coloque o primeiro número:
        <input type='number' name='numero1' id='numero1'>
        Coloque o segundo número:
        <input type='number' name='numero2' id='numero2'>
        <input type='submit' value='Somar'>
    <?php
    if(isset($_POST['numero1']) and isset($_POST['numero2'])){
    $numero = $_POST['numero1'];
    $numerodois = $_POST['numero2'];
    $total = $numero + $numerodois;
    if($total > 20){
            echo "<br>";
            echo "Resposta: " . $total + 8;
    }else{
            echo "<br>";
            echo "Resposta: " . $total - 5;
    }
    }
    ?> 
    <br>
    <a href= "index.php">Voltar</a>
</body>
</html>