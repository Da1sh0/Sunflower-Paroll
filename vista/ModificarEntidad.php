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
            <form action="../controlador/ControladorModificarEntidad.php" method="GET">
                <?php
                foreach ($Entidad as $a) {
                    echo '<label for="nit1">Nit Entidad</label>';
                    echo '<input type="text" name="nit1" id="nit1" class="form-control" value="'.$a->getNit().'" readonly>';
                    
                    echo '<label for="razon_social">Razon social</label>';
                    echo '<input type="text" name="razon_social" id="razon_social" class="form-control" value="'.$a->getRazon_social().'">';
                    
                    echo '<label for="telefonoen">Telefono Entidad</label>';
                    echo '<input type="text" name="telefonoen" id="telefonoen" class="form-control" value="'.$a->getTelefonoEn().'">';
                    
                    echo '<label for="correoEn">Correo Entidad</label>';
                    echo '<input type="email" name="correoEn" id="correoEn" class="form-control" value="'.$a->getCorreoEn().'">';
                    // echo '<input type="submit" name="boton" value="Guardar cambios">';
                    ?>
                    <div class="buttons">
                        <input type="submit" name="boton"value="Guardar cambios" class="btn" onclick="quedarseEnLaPag()">
                        <input type="button" name="botonRegresar" value="Regresar al Menú" class="btn" onclick="regresarAlMenu()">
                        <script>
                            function quedarseEnLaPag() {
                                console.log("Se hizo clic en el botón 'Guardar cambios'");
                                window.location.reload();
                            }
                            function regresarAlMenu() {
                                console.log('Se hizo clic en el botón');
                                window.location.href='../controlador/controladorListarEntidad.php';
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


</html>
