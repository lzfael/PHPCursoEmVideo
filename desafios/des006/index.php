<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Divisão com PHP</title>
</head>
<body>
    <main>
        <h1>Divisão com PHP</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="dividendo">Dividendo:</label>
        <input type="number" name="dividendo" id="1div">
        <label for="divisor">Divisor:</label>
        <input type="number" name="divisor" id="2div">
        <input type="submit" value="Calcular">
        
        <?php 
            $dividendo = $_GET["dividendo"] ?? 1;
            $divisor = $_GET["divisor"] ?? 1;
        ?>
        </form>
    </main>
    <section>
        <h1>Resultado da Divisão</h1>
        <?php 

            $resultado = $dividendo / $divisor;
            $resto = $dividendo % $divisor;

            echo "Resuldado da Divisão <ul> <li> Dividendo: $dividendo </li> <li> Divisor: $divisor </li> <li>Resultado: $resultado</li> <li>Resto: $resto</li> "
        ?>
    </section>
</body>
</html>