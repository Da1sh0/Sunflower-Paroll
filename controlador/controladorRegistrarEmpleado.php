<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../styles/image/girasol.png" type="image/x-icon">
    <title>Registar Empleado</title>
</head>
<body>
  <?php 
    require('../vista/indexEmpleadoRegistrar.php');
    require('../dao/DaoEmpleadoImpl.php');
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
        $dao->registrar($a);
        echo "REGISTRO INSERTADO CON EXITO";
      }
  ?>    
</body>
</html>