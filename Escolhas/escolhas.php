<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Meu Segundo PHP</title>
</head>
<body>
    <?php
    $decrescente = $_POST['numero1'];
    $decrescentedois = $_POST['numero2'];
    for ($i = $decrescente; $i >= $decrescentedois; $i--){
        echo $i;
        echo "<br>";
    }
    ?>
</body>
</html>