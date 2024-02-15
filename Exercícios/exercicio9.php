<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 9</title>
</head>
<body>
    <form action='exercicio9.php' method='POST'>
        Digite o 1º número:
        <input type='number' name='um'>
        <br>
        Digite o 2º número:
        <input type='number' name='dois'>
        <br>
        Digite o 3º número:
        <input type='number' name='tres'>
        <br>
        Digite o 4º número:
        <input type='number' name='quatro'>
        <br>
        Digite o 5º número:
        <input type='number' name='cinco'>
        <br>
        Digite o 6º número:
        <input type='number' name='seis'>
        <br>
        Digite o 7º número:
        <input type='number' name='sete'>
        <br>
        Digite o 8º número:
        <input type='number' name='oito'>
        <br>
        Digite o 9º número:
        <input type='number' name='nove'>
        <br>
        Digite o 10º número:
        <input type='number' name='dez'>
        <br>
        Digite o 11º número:
        <input type='number' name='onze'>
        <br>
        Digite o 12º número:
        <input type='number' name='doze'>
        <br>
        Digite o 13º número:
        <input type='number' name='treze'>
        <br>
        Digite o 14º número:
        <input type='number' name='quatorze'>
        <br>
        Digite o 15º número:
        <input type='number' name='quinze'>
        <br>
        Digite o 16º número:
        <input type='number' name='desesseis'>
        <br>
        Digite o 17º número:
        <input type='number' name='desessete'>
        <br>
        Digite o 18º número:
        <input type='number' name='desoito'>
        <br>
        Digite o 19º número:
        <input type='number' name='desenove'>
        <br>
        Digite o 20º número:
        <input type='number' name='vinte'>
        <br>
        <input type='submit' value='Calcular'>
    </form>
    <?php
        if(isset($_POST['um']) and isset($_POST['dois']) and isset($_POST['tres']) and isset($_POST['quatro']) and isset($_POST['cinco']) and isset($_POST['seis']) and isset($_POST['sete']) and isset($_POST['oito']) and isset($_POST['nove']) and isset($_POST['dez']) and isset($_POST['onze']) and isset($_POST['doze']) and isset($_POST['treze']) and isset($_POST['quatorze'])){
        $livro = $_POST['livro'];
        $usuario = $_POST['usuario'];
        if($usuario == "P"){
            echo "Você tem 10 dias para devolver o livro: " . $livro;
        }if($usuario == "A"){
            echo "Você tem 3 dias para devolver o livro: " . $livro;
    }
    }
    ?> 
    <br>
    <a href= "index.php">Voltar</a>
</body>
</html>