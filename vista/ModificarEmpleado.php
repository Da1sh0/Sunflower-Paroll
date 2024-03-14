
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles2.css">    
    <title>Listar</title>    
</head>
<body>
    <section class="section">
        <div class="wrap">
            <div class="tittleImg">
                <img src="../styles/image/girasol.png" alt="" width="100px">
                <h1 class ="section-h1">Sunflower Payroll</h1>
            </div>
            <form action="../controlador/ControladorModificarEmpleado.php" method="GET">
                <?php
                    foreach ($Emplea as $a) {
                    
                        
                        echo '<label for="numeroidentificacione" >Numero de Identificacion Empleado</label>';
                        echo '<input type="text" name="numeroidentificacione" id="numeroidentificacione" class="form-control" value="'.$a->getNumeroIdentificacionE().'"readonly>';
        
                        echo '<label for="nombre1">Nombre:</label>';
                        echo "<input type='text' name='nombre1' id='nombre1' class='form-control' value='" . $a->getNombre1() . "'>";
                        
                        echo '<label for="apellido1">Apellido:</label>';
                        echo "<input type='text' name='apellido1' id='apellido1' class='form-control' value='" . $a->getApellido1() . "'>";
                        
                        echo '<label for="estado_civile">Estado Civil:</label>';
                        echo "<input type='text' name='estado_civile' id='estado_civile' class='form-control' value='" . $a->getEstadoCivilE() . "'>";
                        
                        echo '<label for="tipodoce">Tipo Documento:</label>';
                        echo "<input type='text' name='tipodoce' id='tipodoce' class='form-control' value='" . $a->getTipodocE() . "'>";
                        
                        echo '<label for="correoe">Correo:</label>';
                        echo "<input type='text' name='correoe' id='correoe' class='form-control' value='" . $a->getCorreoE() . "'>";
                        
                        echo '<label for="generoe">Género:</label>';
                        echo "<input type='text' name='generoe' id='generoe' class='form-control' value='" . $a->getGeneroE() . "'>";
                        
                        echo '<label for="celulare">Celular:</label>';
                        echo "<input type='text' name='celulare' id='celulare' class='form-control' value='" . $a->getCelularE() . "'>";
                        
                        echo '<label for="fecha_nacimiento">Fecha de Nacimiento:</label>';
                        echo "<input type='date' name='fecha_nacimiento' id='fecha_nacimiento' class='form-control' value='" . $a->getFechaNacimiento() . "'>";
                        
                        echo '<label for="fechaexpdocu">Fecha de Expedición:</label>';
                        echo "<input type='date' name='fechaexpdocu' id='fechaexpdocu' class='form-control' value='" . $a->getFechaExpDocu() . "'>";
                        
                        echo '<label for="nit">NIT:</label>';
                        echo "<input type='text' name='nit' id='nit' class='form-control' value='" . $a->getNit() . "'>";
                        // echo "<input type='submit' name='boton'value='Guardar cambios' >";
                        ?>
                        <div class="buttons">
                            <input type="submit" name="boton"value="Guardar cambios" class="btn">
                            <input type="button" name="botonRegresar" value="Regresar al Menú" class="btn" onclick="regresarAlMenu()">
                            <script>
                                function regresarAlMenu() {
                                    console.log('Se hizo clic en el botón');
                                    window.location.href='../controlador/controladorListarEmpleado.php';
                                }
                            </script>
                        </div>
                        <?php
                    }
                ?>
            
            </form>    
        </div>
    </section>
</body>