<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <h2>Formulario para ingresar números</h2>
    <form method="post">
        <label for="num1">ingrese el primero número:</label>
        <input type="number" name="num1" required><br><br>

        <label for="num2">Ingrese el sengundo número:</label>
        <input type="number" name="num2" required><br><br>

        <input type="submit" name="sumar" value="sumar">
    </form>
    <?php
     if (isset($_POST['sumar'])) {

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];


        $resultado = $num1 + $num2;


        echo "<h3>El resultado de la suma es: $resultado</h3>":
     }
     ?>  
</body>
</html>