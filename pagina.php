<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];

            if (is_numeric($numero)) {
                echo "Tabla de multiplicar de $numero:<br>";
                for($i=1; $i<=12; $i++){
                    $producto = $numero*$i;
                    echo"$numero * $i = $producto <br>"; 
                }
            } else {
                echo "Por favor, ingresa un valor numérico.";
            }
        }      
    ?>
</body>
</html>