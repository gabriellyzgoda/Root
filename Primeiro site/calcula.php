<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Meu Segundo PHP</title>
</head>
<body>
    <?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $divisao = $numero1/$numero2;
    echo "Sua divisão é: ";
    echo $divisao;
    ?>
</body>
</html>