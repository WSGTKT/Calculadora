<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <h2>Formulario para ingresar números</h2>
    <form method="get">
            <label for="num1">Primer número:</label>
            <input type="number" name="num1" required>


            <label for="num2">Segundo número:</label>
            <input type="number" name="num2" required>


            <input type="submit" name="sumar" value="Calcular Suma"><br>
            <input type="submit" name="restar" value="Calcular Resta"><br>
            <input type="submit" name="mult" value="Calcular Multiplicación"><br>
            <input type="submit" name="div" value="Calcular División"><br>
        </form>


        <?php
        if (isset($_GET['sumar'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];

            $resultado = $num1 + $num2;

            echo "<div class='resultado'>Resultado: $resultado</div>";
        }
        if (isset($_GET['restar'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $resultado = $num1 - $num2;

            echo "<div class='resultado'>Resultado: $resultado</div>";
        }
        if (isset($_GET['mult'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $resultado = $num1 * $num2;

            echo "<div class='resultado'>Resultado: $resultado</div>";
        }
        if (isset($_GET['div'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $resultado = $num1 / $num2;

             echo "<div class='resultado'>Resultado: $resultado</div>";
        }
        ?>
    </div>
</body>
</html>
