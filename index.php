<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario con Switch-case</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <section class="home">
        <h1>Consulta aqui</h1>
        <br>
        <form class="home-form" action="procesar.php" method="post">
            <label for="txt_nombres">Nombres: </label>
            <input id="txt_nombres" type="text" name="firstname" placeholder="Ingrese sus nombres">
            <label for="txt_apellidos">Apellidos:</label>
            <input id="txt_apellidos" type="text" name="lastname" placeholder="Ingrese sus apellidos">
            <label for="txt_dni">DNI:</label>
            <input type="number" name="dni" id="txt_dni" placeholder="Ingrese su DNI">
            <label for="radio_male">Sexo:</label>
            <div class="home-form-radio-wrapper">
                <input type="radio" name="sex" value="male" id="radio_male" />Masculino
                <input type="radio" name="sex" value="female" />Femenino
            </div>
            <label for="cbo_trabajo">Situación Laboral:</label>
            <select name="work">
                <option value="empleado">Empleado</option>
                <option value="desempleado">Desempleado</option>
                <option value="independiente">Independiente</option>
            </select>
            <button type="submit">Enviar</button>
        </form>
    </section>
</body>
</html>