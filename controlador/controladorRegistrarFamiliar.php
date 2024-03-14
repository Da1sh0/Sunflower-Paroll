<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../styles/image/girasol.png" type="image/x-icon">
    <title>Registro Familair</title>
</head>
<body>
  <?php 
  require('../vista/indexFamiliarRegistrar.php');
  require('../dao/DaoFamiliarImpl.php');
  
  $dao=new DaoFamiliarImpl();
  if (isset($_GET['boton'])) {
      $codFamiliar=$_GET['cod_familiar'];
      $parentezco=$_GET['parentezco'];
      $documetoF=$_GET['documetof'];
      $fechaNacimientoF=$_GET['fechanacimientof']; 
      $nombreF1=$_GET['nombref1'];
      $apellidoF1=$_GET['apellidof1'];
      $numeroIdentificacionE=$_GET['numEmplw'];
      $a=new Familiar($codFamiliar,$parentezco,$documetoF,$fechaNacimientoF,$nombreF1,$apellidoF1,$numeroIdentificacionE);
      $dao->registrar($a);
      echo "REGISTRO INSERTADO CON EXITO";
    }
  ?>    
</body>
</html>