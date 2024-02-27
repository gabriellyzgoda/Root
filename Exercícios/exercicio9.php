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
        <input type='number' name='dezesseis'>
        <br>
        Digite o 17º número:
        <input type='number' name='dezessete'>
        <br>
        Digite o 18º número:
        <input type='number' name='dezoito'>
        <br>
        Digite o 19º número:
        <input type='number' name='dezenove'>
        <br>
        Digite o 20º número:
        <input type='number' name='vinte'>
        <br>
        <input type='submit' value='Calcular'>
    </form>
    <?php
        if(isset($_POST['um']) and isset($_POST['dois']) and isset($_POST['tres']) and isset($_POST['quatro']) and isset($_POST['cinco']) and isset($_POST['seis']) and isset($_POST['sete']) and isset($_POST['oito']) and isset($_POST['nove']) and isset($_POST['dez']) and isset($_POST['onze']) and isset($_POST['doze']) and isset($_POST['treze']) and isset($_POST['quatorze']) and isset($_POST['quinze']) and isset($_POST['dezesseis']) and isset($_POST['dezessete']) and isset($_POST['dezoito']) and isset($_POST['dezenove']) and isset($_POST['vinte'])){
            
            $totalPositivo = 0;
            $totalNegativo = 0;

            if($_POST['um'] > 0){
                $totalPositivo = $totalPositivo + $_POST['um'];
            }
            if ($_POST['um'] < 0){
                $totalNegativo++;
            }
            if($_POST['dois'] > 0){
                $totalPositivo = $totalPositivo + $_POST['dois'];
            }
            if ($_POST['dois'] < 0){
                $totalNegativo++;
            }
            if($_POST['tres'] > 0){
                $totalPositivo = $totalPositivo + $_POST['tres'];
            }
            if ($_POST['tres'] < 0){
                $totalNegativo++;
            }
            if($_POST['quatro'] > 0){
                $totalPositivo = $totalPositivo + $_POST['quatro'];
            }
            if ($_POST['quatro'] < 0){
                $totalNegativo++;
            }
            if($_POST['cinco'] > 0){
                $totalPositivo = $totalPositivo + $_POST['cinco'];
            }
            if ($_POST['cinco'] < 0){
                $totalNegativo++;
            }
            if($_POST['seis'] > 0){
                $totalPositivo = $totalPositivo + $_POST['seis'];
            }
            if ($_POST['seis'] < 0){
                $totalNegativo++;
            }
            if($_POST['sete'] > 0){
                $totalPositivo = $totalPositivo + $_POST['sete'];
            }
            if ($_POST['sete'] < 0){
                $totalNegativo++;
            }
            if($_POST['oito'] > 0){
                $totalPositivo = $totalPositivo + $_POST['oito'];
            }
            if ($_POST['oito'] < 0){
                $totalNegativo++;
            }
            if($_POST['nove'] > 0){
                $totalPositivo = $totalPositivo + $_POST['nove'];
            }
            if ($_POST['nove'] < 0){
                $totalNegativo++;
            }
            if($_POST['dez'] > 0){
                $totalPositivo = $totalPositivo + $_POST['dez'];
            }
            if ($_POST['dez'] < 0){
                $totalNegativo++;
            }
            if($_POST['onze'] > 0){
                $totalPositivo = $totalPositivo + $_POST['onze'];
            }
            if ($_POST['onze'] < 0){
                $totalNegativo++;
            }
            if($_POST['doze'] > 0){
                $totalPositivo = $totalPositivo + $_POST['doze'];
            }
            if ($_POST['doze'] < 0){
                $totalNegativo++;
            }
            if($_POST['treze'] > 0){
                $totalPositivo = $totalPositivo + $_POST['treze'];
            }
            if ($_POST['treze'] < 0){
                $totalNegativo++;
            }
            if($_POST['quatorze'] > 0){
                $totalPositivo = $totalPositivo + $_POST['quatorze'];
            }
            if ($_POST['quatorze'] < 0){
                $totalNegativo++;
            }
            if($_POST['quinze'] > 0){
                $totalPositivo = $totalPositivo + $_POST['quinze'];
            }
            if ($_POST['quinze'] < 0){
                $totalNegativo++;
            }
            if($_POST['dezesseis'] > 0){
                $totalPositivo = $totalPositivo + $_POST['dezesseis'];
            }
            if ($_POST['dezesseis'] < 0){
                $totalNegativo++;
            }
            if($_POST['dezessete'] > 0){
                $totalPositivo = $totalPositivo + $_POST['dezessete'];
            }
            if ($_POST['dezessete'] < 0){
                $totalNegativo++;
            }
            if($_POST['dezoito'] > 0){
                $totalPositivo = $totalPositivo + $_POST['dezoito'];
            }
            if ($_POST['dezoito'] < 0){
                $totalNegativo++;
            }
            if($_POST['dezenove'] > 0){
                $totalPositivo = $totalPositivo + $_POST['dezenove'];
            }
            if ($_POST['dezenove'] < 0){
                $totalNegativo++;
            }
            if($_POST['vinte'] > 0){
                $totalPositivo = $totalPositivo + $_POST['vinte'];
            }
            if ($_POST['vinte'] < 0){
                $totalNegativo++;
            }
    }
    ?> 
    <br>
    <a href= "index.php">Voltar</a>
</body>
</html>