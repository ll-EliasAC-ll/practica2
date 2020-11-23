<?php
include "../db/autoload.php";

if (isset($_POST['nuevo'])) {
    $GrabarLeccion = new ControladorLeccion();
    $GrabarLeccion->GuardarCategoria($_POST);
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Crear Lecciones</h1>
        <form action="" method="POST">
            <label>numero:</label><input type="text"><br>
            <label>estado:</label><input type="text"><br>
            <label>comentario profesor:</label><input type="text"><br>
            <label>comentario estudiate:</label><input type="text"><br>
            <input type="submit" value="guaradra">
            
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
