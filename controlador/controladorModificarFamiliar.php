<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilos.css">
    <title>Registar Empleado</title>
</head>
<body>
  <?php 
     require('../dao/DaoFamiliarImpl.php');
     $resu = new DaoFamiliarImpl();
     
     // Verificar si MODIFICA está definido y no está vacío
     if(isset($_GET['cod_familiar']) && !empty($_GET['cod_familiar'])) {
         $busca = $_GET['cod_familiar'];
         $familiar = $resu->buscar($busca);
         require('../vista/ModificarFamiliar.php');
     } else {
    $dao=new DaoFamiliarImpl();
    if (isset($_GET['boton'])) {
        $codFamiliar = $_GET['cod_familia'];
        $parentezco = $_GET['parentezco'];
        $documentoF = $_GET['documetof'];
        $fechaNacimientoF = $_GET['fechanacimientof'];
        $nombreF1 = $_GET['nombref1'];
        $apellidoF1 = $_GET['apellidof1'];
        $numeroIdentificacionE = $_GET['numeroidentificacione'];

        $a=new Familiar($codFamiliar, $parentezco, $documentoF, $fechaNacimientoF, $nombreF1, $apellidoF1, $numeroIdentificacionE);
        $dao->modificar($a);
        echo "REGISTRO MODIFICADO CON EXITO";
      }
    }
  ?>    
</body>
</html>