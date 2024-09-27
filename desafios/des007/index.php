<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salarios Minimos</title>
</head>
<body>
    <main>
        <h1>Informe seu salario</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="salario">Salario: </label>
        <input type="number" name="nsalario" id="salario" step="0.01">
        <p>Considerando  o sálario minino de <strong>R$1,412,00</strong> </p>
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $salario = $_GET['nsalario'] ?? 0;
            $minSalario =  1412;

            $quntsalario = intdiv($salario, $minSalario);
            $restsalario = $salario % $minSalario;

            print "Quem recebe um salario de R$$salario ganha <strong>$quntsalario salarios mínimos</strong> + R$$restsalario "
       ?>
    </section>
</body>
</html>