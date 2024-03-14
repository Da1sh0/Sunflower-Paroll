<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="estilos.css"> -->
    
    <title>Listar</title>    
</head>
<body>
<section class="section">
    <div class="div">
    <table class="table">
            <caption>LISTADO DE FAMILIARES</caption>
            <thead>
                <tr>
                    <th>CODIGO</th>
                    <th>PARENTEZCO</th>
                    <th>DOCUMENTO</th>
                    <th>FECHA NACIMIENTO</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>NUMERO DE IDENTIFICACION DEL EMPLEADO</th>
                    <th>ACCION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($Familiar as $a) {
                        echo "<tr>";
                        echo "<td>" . $a->getCodFamiliar() . "</td>";
                        echo "<td>" . $a->getParentezco() . "</td>";
                        echo "<td>" . $a->getDocumentoF() . "</td>";
                        echo "<td>" . $a->getFechaNacimientoF() . "</td>";
                        echo "<td>" . $a->getnombreF1() . "</td>";
                        echo "<td>" . $a->getApellidoF1() . "</td>";
                        echo "<td>" . $a->getNumeroIdentificacionE()."</td>";
                        echo "<td><a href='../controlador/controladorEliminarFamiliar.php?cod_familiar=".$a->getCodFamiliar()."'>Eliminar</a></td>";
                        echo "<td><a href='../controlador/controladorModificarFamiliar.php?cod_familiar=".$a->getCodFamiliar()."'>Editar</a></td>";
                        echo "</tr>";                  
                    }
                ?>
            </tbody>
    </table>
    </div>
    <section class="section">
</body>

</html>