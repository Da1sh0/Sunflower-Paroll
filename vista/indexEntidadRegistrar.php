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
            <form action="../controlador/controladorRegistrarEntidad.php" method="GET">
            <label for="nit">Nit Entidad</label>    
                <input type="text" name="nit" id="nit" class="form-control">
                
                <label for="razon_social">Razon social</label>    
                <input type="text" name="razon_social" id="razon_social" class="form-control">

                <label for="telefonoen">Telefono Entidad</label>    
                <input type="text" name="telefonoen" id="telefonoen" class="form-control">
                
                <label for="correoEn">Correo Entidad</label>    
                <input type="email" name="correoEn" id="correoEn" class="form-control">
                
                <div class="buttons">
                    <input type="submit" name="boton"value="Registar Entidad" class="btn">
                    <input type="button" name="botonRegresar" value="Regresar al Menú" class="btn" onclick="regresarAlMenu()">
                    <script>
                        function regresarAlMenu() {
                            console.log('Se hizo clic en el botón');
                            window.location.href='../paginas/menuEmpresa.php';
                        }
                    </script>
                </div>
            </form>
        </div>
    </section>         
</body>
</html>