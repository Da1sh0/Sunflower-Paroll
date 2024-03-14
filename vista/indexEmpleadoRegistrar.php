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
            <form action="../controlador/controladorRegistrarEmpleado.php" method="GET">
                <label for="numeroidentificacione">Numero de Identificacion Empleado</label>    
                <input type="text" name="numeroidentificacione" id="numeroidentificacione" class="form-control">

                <label for="nombre1">Nombre</label>    
                <input type="text" name="nombre1" id="nombre1" class="form-control">
                
                <label for="apellido1">Primer Apellido</label>    
                <input type="text" name="apellido1" id="apellido1" class="form-control">
                
                <label for="estado_civile">Estado Civil</label>    
                <select name="estado_civile" id="estado_civile">
                    <option value="soltero" selected>Soltero/a</option>
                    <option value="casado">Casado/a</option>
                    <option value="divorciado">Divorciado/a</option>
                    <option value="viudo">Viudo/a</option>
                    <option value="union_libre">Unión Libre</option>
                </select>

                <label for="tipodoce">Tipo Documento</label>    
                <select name="tipodoce" id="tipodoce">
                    <option value="CC" selected>Cédula de Ciudadanía</option>
                    <option value="TI">Tarjeta de Identidad</option>
                    <option value="CE">Cédula de Extranjería</option>
                    <option value="PAS">Pasaporte</option>
                </select>

                <label for="correoe">Correo Empleado</label>    
                <input type="email" name="correoe" id="correoe" class="form-control">
                
                <label for="generoe">Género Empleado</label>    
                <select name="generoe" id="generoe" >
                    <option value="no_indica"selected>No indica</option>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                    <option value="no_binario">No binario</option>
                </select>

                <label for="celulare">Celular</label>    
                <input type="text" name="celulare" id="celulare" class="form-control">

                <label for="fecha_nacimiento">Fecha Nacimiento</label>    
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
                
                <label for="fechaexpdocu">Fecha Expedicion</label>    
                <input type="date" name="fechaexpdocu" id="fechaexpdocu" class="form-control">
                <div class="buttons">
                    <input type="submit" name="boton"value="Registar Empleado" class="btn">
                    <input type="button" name="botonRegresar" value="Regresar al Menú" class="btn" onclick="regresarAlMenu()">
                    <script>
                        function regresarAlMenu() {
                            console.log('Se hizo clic en el botón');
                            window.location.href='../paginas/menuEmpleado.php';
                        }
                    </script>
                </div>
            </form>
        </div>
    </section>         
</body>
</html>