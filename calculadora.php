<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        
        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>

        <label for="operacion">Operación:</label>
        <select id="operacion" name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <br><br>

        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];
        $resultado = 0;

        switch ($operacion) {
            case "sumar":
                $resultado = $numero1 + $numero2;
                break;
            case "restar":
                $resultado = $numero1 - $numero2;
                break;
            case "multiplicar":
                $resultado = $numero1 * $numero2;
                break;
            case "dividir":
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    $resultado = "Error: División por cero";
                }
                break;
            default:
                $resultado = "Operación no válida";
        }
        
        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>
