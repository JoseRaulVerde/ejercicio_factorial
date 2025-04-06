<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">

    <title>Factorial</title>
</head>
<body>
    <form method="GET">
        <input type="number" name="numero" required min="0">
        <button type="submit">Calcular</button>
    </form>

    <?php
        if (isset($_GET['numero'])) {
            $n = intval($_GET['numero']);
            echo "<div>El número ingresado es: <strong>$n</strong></div>";

            // Mostrar pasos del cálculo factorial
            echo "<div class='limited-text'>El cálculo factorial es: ";
            for ($i = $n; $i >= 1; $i--) {
                echo $i;
                if ($i > 1) {
                    echo " x ";
                }
            }
            echo "</div>";

            // Calcular factorial
            $factorial = 1;
            for ($i = 1; $i <= $n; $i++) {
                $factorial *= $i;
            }

            echo "<div>El factorial de $n es: <strong>$factorial</strong></div>";
        }
    ?>
</body>
</html>
