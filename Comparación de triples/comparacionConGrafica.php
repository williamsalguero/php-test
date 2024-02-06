<!DOCTYPE html>
<html>

<head>
    <title>Comparación de Triples</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #f9f9f9;
    }

    h2 {
        text-align: center;
    }

    form {
        text-align: center;
    }

    label {
        font-weight: bold;
    }

    input[type="number"] {
        width: 100px;
        padding: 5px;
        margin: 5px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
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
        <h2>Comparación de Triples</h2>

        <form method="post" action="">
            <label for="a0">a[0]:</label>
            <input type="number" id="a0" name="a[0]" required>
            <label for="a1">a[1]:</label>
            <input type="number" id="a1" name="a[1]" required>
            <label for="a2">a[2]:</label>
            <input type="number" id="a2" name="a[2]" required>
            <br>
            <label for="b0">b[0]:</label>
            <input type="number" id="b0" name="b[0]" required>
            <label for="b1">b[1]:</label>
            <input type="number" id="b1" name="b[1]" required>
            <label for="b2">b[2]:</label>
            <input type="number" id="b2" name="b[2]" required>
            <br>
            <button type="submit">Calcular Puntos de Comparación</button>
        </form>

        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];

        // Función para comparar los arrays a y b y calcular los puntos de comparación
        function compararArrays($a, $b) {
            $puntosA = 0;
            $puntosB = 0;

            for ($i = 0; $i < 3; $i++) {
                if ($a[$i] > $b[$i]) {
                    $puntosA++;
                } elseif ($a[$i] < $b[$i]) {
                    $puntosB++;
                }
            }

            return [$puntosA, $puntosB];
        }

        // Calcular los puntos de comparación
        $puntos = compararArrays($a, $b);

        // Mostrar los resultados
        echo "<p>Puntos de comparación para a: $puntos[0]</p>";
        echo "<p>Puntos de comparación para b: $puntos[1]</p>";
    }
    ?>

    </div>

</body>

</html>