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
            <h1 class ="section-h1">Sunflower Payroll <br> Empleados</h1>
        </div>
        <div class="container">
            <table class="table">
                    <thead>
                        <tr>
                            <th>NUMERO DE IDENTIFICACION</th>
                            <th>NOMBRE1</th>
                            <th>NOMBRE2</th>
                            <th>ESTADO CIVIL</th>
                            <th>TIPO DOCUMENTO</th>
                            <th>CORREO</th>
                            <th>GENERO</th>
                            <th>CELULAR</th>
                            <th>FECHA DE NACIMIENTO</th>
                            <th>FECHA EXPEDICION</th>
                            <th>NIT</th>
                            <th colspan="3">ACCIÓN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($Empleado as $a) {
                                echo "<tr>";
                              
                                echo "<td>" . $a->getNumeroIdentificacionE() . "</td>";
                                echo "<td>" . $a->getNombre1() . "</td>";
                                echo "<td>" . $a->getApellido1() . "</td>";
                                echo "<td>" . $a->getEstadoCivilE() . "</td>";
                                echo "<td>" . $a->getTipodocE() . "</td>";
                                echo "<td>" . $a->getCorreoE() . "</td>";
                                echo "<td>" . $a->getGeneroE() . "</td>";
                                echo "<td>" . $a->getCelularE() . "</td>";
                                echo "<td>" . $a->getFechaNacimiento() . "</td>";
                                echo "<td>" . $a->getFechaExpDocu() . "</td>";
                                echo "<td>" . $a->getNit() . "</td>";
                                echo "<td><a href='controladorEliminarEmpleado.php?numeroIdentificacionE=".$a->getNumeroIdentificacionE()."'>Eliminar</a>";
                                echo "<td><a href='../paginas/menuFamiliares.php?idEmpl=".$a->getNumeroIdentificacionE()."'>Familiares</a>";
                                echo "<td><a href='controladorModificarEmpleado.php?MODIFICA=".$a->getNumeroIdentificacionE()."'>Modificar</a></td>";
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
                        window.location.href='../paginas/menuEmpleado.php';
                    }
                </script>
            </div>
        </div>
    </div>
<section class="section">
</body>
</html>