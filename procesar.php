<?php

    $sexo = $_POST["sex"];
    $dni = $_POST["dni"];
    $situacionLaboral = $_POST["work"];
    $nombre = $_POST["firstname"];
    $apellidos = $_POST["lastname"];

    switch($sexo) {
        case "male":
            $generoMensaje = "Bienvenido";
            break;
        case "female":
            $generoMensaje = "Bienvenida";
            break;
        default:
            $generoMensaje = "Hola";
            break;
    }

    switch($situacionLaboral) {
        case "desempleado":
        case "independiente":
            $califica = true;
            break;
        default:
            $califica = false;
            break;
    }

    switch($califica) {
        case true:
            $imagenResultado = "https://media.tenor.com/HJ0iSKwIG28AAAAC/yes-baby.gif";
            $mensaje = "Felicidades, usted califica para el bono yanapay";
            break;
        case false:
            $imagenResultado = "https://media.tenor.com/mtdfuIzU4Y0AAAAM/crying-penguin.gif";
            $mensaje = "Lo sentimos, usted no califica para el bono";
            break;
        default:
            break;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $generoMensaje ?></title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <section class="procesar">
        <div class="welcome-message">
            <h1 class="result-text"><?php echo $generoMensaje." ".$nombre." ".$apellidos ?></h1>
            <h1 class="result-text">DNI: <?php echo $dni ?></h1>
            <img class="result-image" src="<?php echo $imagenResultado ?>">
            <h2 class="result-text" ><?php echo $mensaje ?></h2>
        </div>
    </section>
</body>
</html>