<!DOCTYPE html>
<html>

<head>
    <title>Calculadora de Diferencia en Diagonal</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2,
    h3 {
        text-align: center;
    }

    form {
        text-align: center;
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type="number"] {
        width: 50px;
        margin: 5px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        margin-top: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>

    <div class="container">
        <h2>Calculadora de Diferencia en Diagonal</h2>

        <form method="post" action="">
            <label for="size">Tamaño de la matriz (nxn):</label>
            <input type="number" id="size" name="size" min="2" max="10" required>
            <button type="submit">Crear matriz</button>
        </form>

        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $size = $_POST["size"];
        ?>

        <form method="post" action="">
            <h3>Ingrese los números para la matriz (<?= $size ?>x<?= $size ?>):</h3>
            <?php for ($i = 0; $i < $size; $i++) { ?>
            <?php for ($j = 0; $j < $size; $j++) { ?>
            <input type="number" name="matriz[<?= $i ?>][<?= $j ?>]" required>
            <?php } ?>
            <br>
            <?php } ?>
            <input type="hidden" name="size" value="<?= $size ?>">
            <button type="submit">Calcular diferencia en diagonal</button>
        </form>

        <?php
    }
    ?>

        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["matriz"])) {
        $matriz = $_POST["matriz"];
        $size = $_POST["size"];

        // Calcular la diferencia en diagonal
        $diagonalIzquierdaDerecha = 0;
        $diagonalDerechaIzquierda = 0;

        for ($i = 0; $i < $size; $i++) {
            $diagonalIzquierdaDerecha += $matriz[$i][$i];
            $diagonalDerechaIzquierda += $matriz[$i][$size - $i - 1];
        }

        $diferencia = abs($diagonalIzquierdaDerecha - $diagonalDerechaIzquierda);

        // Mostrar resultado
        echo "<h3>La diferencia absoluta en diagonal es: $diferencia</h3>";
    }
    ?>

    </div>

</body>

</html>