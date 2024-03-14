<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../styles/image/girasol.png" type="image/x-icon">
    <title>Registrar Empresas</title>
</head>
<body>
  <?php 
  require('../vista/indexEntidadRegistrar.php');
  require('../dao/DaoEntidadImpl.php');
  
  $dao=new DaoEntidadImpl();
  if (isset($_GET['boton'])) {
      $nit=$_GET['nit'];
      $telefonoEn=$_GET['telefonoen'];
      $razon_social=$_GET['razon_social'];
      $correoEn=$_GET['correoEn']; 
      $a=new Entidad($nit,$razon_social,$telefonoEn,$correoEn);
      $dao->registrar($a);
      echo "REGISTRO INSERTADO CON EXITO";
    }
  ?>    
</body>
</html>