<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Meu Segundo PHP</title>
</head>
<body>
    <?php
    $decrescente = $_POST['numero'];
    for ($i = $decrescente; $i >= 0; $i--){
        echo $i;
        echo "<br>";
    }
    ?>
</body>
</html>