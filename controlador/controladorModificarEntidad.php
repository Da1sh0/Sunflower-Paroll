<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../styles/image/girasol.png" type="image/x-icon">
    <title>Modificar Entidad</title>
</head>
<body>
  <?php 
     require('../dao/DaoEntidadImpl.php');
     $resu = new DaoEntidadImpl();
     // Verificar si MODIFICA está definido y no está vacío
     if(isset($_GET['nit']) && !empty($_GET['nit'])) {
         $busca = $_GET['nit'];
         $Entidad = $resu->buscar($busca);
         require('../vista/ModificarEntidad.php');
     } else {
    $dao=new DaoEntidadImpl();
    if (isset($_GET['boton'])) {
        $nit=$_GET['nit1'];
        $telefonoEn=$_GET['telefonoen'];
        $razon_social=$_GET['razon_social'];
        $correoEn=$_GET['correoEn']; 
        $a=new Entidad($nit,$razon_social,$telefonoEn,$correoEn);
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
            <h1>Entidad modificada con éxito.</h1>
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