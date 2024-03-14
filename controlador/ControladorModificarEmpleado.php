<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../styles/image/girasol.png" type="image/x-icon">
    <title>Modificar Empleado</title>
</head>
<body>
  <?php 
     require('../dao/DaoEmpleadoImpl.php');
     $resu = new DaoEmpleadoImpl();
     // Verificar si MODIFICA está definido y no está vacío
     if(isset($_GET['MODIFICA']) && !empty($_GET['MODIFICA'])) {
         $busca = $_GET['MODIFICA'];
         $Emplea = $resu->buscar($busca);
         require('../vista/ModificarEmpleado.php');
     } else {
    $dao=new DaoEmpleadoImpl();
    if (isset($_GET['boton'])) {
        $numeroIdentificacionE=$_GET['numeroidentificacione'];
        $nombre1=$_GET['nombre1'];
        $apellido1=$_GET['apellido1'];
        $estado_civilE=$_GET['estado_civile']; 
        $tipodocE=$_GET['tipodoce'];
        $correoE=$_GET['correoe'];
        $generoE=$_GET['generoe']; 
        $celularE=$_GET['celulare'];
        $fecha_nacimiento=$_GET['fecha_nacimiento'];
        $fechaexpdocu=$_GET['fechaexpdocu']; 
        $nit='121321231';
        $a=new Empleado($numeroIdentificacionE,$nombre1,$apellido1,$estado_civilE,$tipodocE,$correoE, $generoE, $celularE, $fecha_nacimiento, $fechaexpdocu, $nit);
        $dao->modificar($a);
        ?>
        <link rel="stylesheet" href="../styles/styles2.css">
        <link rel="shortcut icon" href="../styles/image/girasol.png" type="image/x-icon">
        <title>Elimado!</title>
        <div class="wrap">
            <div class="tittleImg">
                    <img src="../styles/image/girasol.png" alt="" width="100px">
                    <h1 class ="section-h1">Sunflower Payroll</h1>
                </div>
            <h1>Empleado modificada con éxito.</h1>
            <div class="buttons">
                <input type="button" name="botonRegresar" value="Regresar al Menú" class="btn" onclick="regresarAlMenu()">
                <script>
                    function regresarAlMenu() {
                      console.log('Se hizo clic en el botón');
                      window.history.back();
                    }
                </script>
            </div>
        </div>
        <?php
        // echo "REGISTRO MODIFICADO CON EXITO";
      }
    }
  ?>    
</body>
</html>