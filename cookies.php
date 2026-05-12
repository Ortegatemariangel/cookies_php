<?php

// Verificamos si el usuario envió el formulario
if(isset($_POST["nombre"])) {

    // Guardamos el nombre escrito
    $nombre = $_POST["nombre"];

    // Creamos la cookie
    setcookie("usuario", $nombre, time() + 3600);

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo Cookies</title>
</head>
<body>

<h1>Cookies en PHP</h1>

<!-- FORMULARIO -->
<form method="POST">

    <input type="text" name="nombre" placeholder="Escribe tu nombre">

    <button type="submit">
        Guardar nombre
    </button>

</form>

<hr>

<?php

// Verificamos si existe la cookie
if(isset($_COOKIE["usuario"])) {

    echo "Hola " . $_COOKIE["usuario"];

} else {

    echo "No hay usuario guardado";

}

?>

</body>
</html>