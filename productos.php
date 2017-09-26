<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <center>
            <table border="1">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include ("conexion.php");
                    
                    $query= "SELECT * FROM productos";
                    $resultado= $conexion->query($query);
                    while($row =$resultado-> fetch_assoc()){
                        
                    ?>
                    <tr>
                        <td> <?php echo $row ['id']; ?></td>
                        <td> <?php echo $row ['nombre']; ?></td>
                        <td> <img height="70" src="data:upload/;base64, <?php echo base64_encode($row['imagen']); ?>"/></td>
                        <td> <img height="70" src="upload/ $row['imagen'].'"/></td>
                        
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </center>
    </body>
</html>
