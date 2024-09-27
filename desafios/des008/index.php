<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Descobraindo Raízes</title>
</head>
<body>
    <main>
        <h1>Informe um numero</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>">
        <label for="numero">Numero:</label>
        <input type="number" name="num" id="num">
        <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $num = $_GET['num'];
            $quadnum = sqrt($num);
            $cubicnum = pow($num, 1.0 / 3.0);

            echo "Numero informado pelo usuario: $num <ul> <li> <strong> Raíz quadrada: $quadnum </strong> </li> <li> Raíz cubica: $cubicnum";
        ?>
    </section>
</body>
</html>