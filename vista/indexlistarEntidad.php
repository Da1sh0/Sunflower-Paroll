<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="../styles/styles3.css">
    <link rel="shortcut icon" href="../styles/image/girasol.png" type="image/x-icon">
    <title>Listar</title>    
</head>
<body>
<section class="section">
    <div class="div">
        <div class="tittleImg">
            <img src="../styles/image/girasol.png" alt="" width="100px">
            <h1 class ="section-h1">Sunflower Payroll <br> Empresas</h1>
        </div>
        <table class="table">
                <caption>LISTADO DE EMPLEADOS</caption>
                <thead>
                    <tr>
                        <th>NIT</th>
                        <th>TELEFONO ENTIDAD</th>
                        <th>RAZON SOCIAL</th>
                        <th>CORREO</th>
                        <th colspan="2">ACCIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($Entidad as $a) {
                            echo "<tr>";
                            echo "<td>" . $a->getNit() . "</td>";
                            echo "<td>" . $a->getRazon_social() . "</td>";
                            echo "<td>" . $a->getTelefonoEn() . "</td>";
                            echo "<td>" . $a->getCorreoEn() . "</td>";
                            echo "<td><a href='controladorEliminarEntidad.php?nit=".$a->getNit()."'>Eliminar</a>";
                            echo "<td><a href='controladorModificarEntidad.php?nit=".$a->getNit()."'>Modificar</a></td>";
                            echo "</tr>";                  
                        }
                    ?>
                </tbody>
        </table>
        <div class="buttons">
                <input type="button" name="botonRegresar" value="Regresar al Menú" class="btn" onclick="regresarAlMenu()">
                <script>
                    function regresarAlMenu() {
                        console.log('Se hizo clic en el botón');
                        window.location.href='../paginas/menuEmpresa.php';
                    }
                </script>
            </div>
    </div>
<section class="section">
</body>
</html>