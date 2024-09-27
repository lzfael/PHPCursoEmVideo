<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio PHP</title>
</head>
<body>
    <?php 
        $valor1 = $_GET['V1'] ?? 0;
        $valor2 = $_GET['V2'] ?? 0;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="V1">Valor 1:</label>
            <input type="number" name="V1" id="v1" value="<?=$valor1?>">
            <label for="V2">Valor 2:</label>
            <input type="number" name="V2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h2>Resultado da soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            print "A soma entre os valores $valor1 e $valor2 é: $soma"        
        ?>
    </section>
</body>
</html>