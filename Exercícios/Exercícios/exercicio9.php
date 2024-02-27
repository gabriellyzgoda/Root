<!DOCTYPE html>

<html>
<head>
    <title> Exercício 9</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    .fundo {
        width: 100%;
        height:965px;
        background-image: url("fundo.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    .texto{
        font-size: 70px;
        color: black;
    }
    .botao{
        display: inline-block;
        padding: .75rem 1.25rem;
        border-radius: 10px;
        color: black;
        background-color: #FOFFFF;
        text-transform: uppercase;
        font-size: 1rem;
        letter-spacing: .15rem;
        transition: all .3s;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
</style>
<body>
<div class="fundo">
<br>
<center>
    <p class="texto"> Exercício 9</p>
        <form action='exercicio9.php' method='POST'>
        Digite 20 numeros colocando virgula entre elas
        <input type='text' name='numeros' id='numeros'>
        <br>
        <br>
        <input type='submit' value='Enviar' class="botao">
        <br>
        <br>
        </form>
        <?php
            $numeros = $_POST['numeros'];
            $numeros_array = explode(",", $numeros);
            $soma_positivos = 0;
            $total_negativos = 0;
            foreach ($numeros_array as $numero) {
                $numero = intval($numero);
                    if ($numero > 0) {
                        $soma_positivos += $numero;
                    } elseif ($numero < 0) {
                        $total_negativos++;
                    }
                }
            echo "A soma dos números positivos é: " . $soma_positivos . "<br>";
            echo "O total de números negativos é: " . $total_negativos . "<br>";
        ?>
        <br>
        <br>
        <a href= "index.php">Voltar</a>
    <center>
</div>
</body>
</html>