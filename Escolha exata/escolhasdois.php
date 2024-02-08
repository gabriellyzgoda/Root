<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Meu Segundo PHP</title>
</head>
<body>
    <?php
    $numero = $_POST['numero1'];
    $numerodois = $_POST['numero2'];
    if($numero >= $numerodois){
        for($i = $numero; $i >= $numerodois;$i--){
            echo $i;
            echo "<br>";
        }
    }else{
        for($i = $numerodois; $i >= $numero; $i--){
            echo $i;
            echo "<br>";
        }
    }
    ?>
</body>
</html>