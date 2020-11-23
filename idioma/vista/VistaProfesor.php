<?php
include "../db/autoload.php";
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


        <?php
        $contCategoria = new ControladorProfesor();
        $categoria = $contCategoria->mostrarCategoria();
        ?>
        <h1>LISTA DE PROFESORES</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Nombre</th>
                    <th>idioma</th>  
                    <th>programas</th>
                </tr>
            </thead>
            <?php
            foreach ($categoria as $cato) {
                ?>        

                <tr>
                    <td><?php echo $cato['id']; ?></td>
                    <td><?php echo $cato['nombre']; ?></td>
                    <td><?php echo $cato['idioma']; ?> </td>
                    <td><a href="#">detalle</a></td>

                </tr>
                <?php
            }
            ?>


        </table>


    </body>
</html>
