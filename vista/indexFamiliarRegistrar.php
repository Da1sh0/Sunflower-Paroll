<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles2.css">
    <link rel="shortcut icon" href="../styles/image/girasol.png" type="image/x-icon">
    <title>Document</title>
</head>
<body>
    <section class="section">
        <div class="wrap">
            <div class="tittleImg">
                <img src="../styles/image/girasol.png" alt="" width="100px">
                <h1 class ="section-h1">Sunflower Payroll</h1>
            </div>
            <form action="../controlador/controladorRegistrarFamiliar.php" method="GET">

                <label for="cod_familiar">Codigo Familiar</label>    
                <input type="text" name="cod_familiar" id="cod_familiar" class="form-control">

                <label for="parentezco">Parentezco</label>    
                <input type="text" name="parentezco" id="parentezco" class="form-control">
                
                <label for="documetof">Documento del Familiar</label>    
                <input type="text" name="documetof" id="documetof" class="form-control">
                
                <label for="fechanacimientof">Fecha de nacimiento</label>    
                <input type="date" name="fechanacimientof" id="fechanacimientof" class="form-control">
                
                <label for="nombref1">Nombre</label>    
                <input type="text" name="nombref1" id="nombref1" class="form-control">
                
                <label for="apellidof1">Apellido</label>    
                <input type="text" name="apellidof1" id="apellidof1" class="form-control">
                <?php $emple=$_GET['idEmpl']?>
                <label for="numeroidentificacione">Numero Identificacion Empleado</label>    
                <input type="text" name="numEmplw" id="numEmplw" class="form-control" value="<?php echo $emple ?>" readonly>
                
                <div class="buttons">
                    <input type="submit" name="boton"value="Registar Familiar" class="btn">
                    <input type="button" name="botonRegresar" value="Regresar al Menú" class="btn" onclick="regresarAlMenu()">
                    <script>
                        function regresarAlMenu() {
                            console.log('Se hizo clic en el botón');
                            window.location.href='../controlador/controladorListarEmpleado.php';
                        }
                    </script>
                </div>
            </form>
        </div>
    </section>         
</body>
</html>
