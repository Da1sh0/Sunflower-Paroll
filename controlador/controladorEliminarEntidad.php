<?php
require('../dao/DaoEntidadImpl.php');
require_once('../modelo/Entidad.php');
$dao = new DaoEntidadImpl();

if (isset($_GET['nit'])) {
    $nit = $_GET['nit'];
    $entidad = new Entidad($nit, null, null, null);
    $dao->eliminar($entidad);
    ?>
    <link rel="stylesheet" href="../styles/styles2.css">
    <link rel="shortcut icon" href="../styles/image/girasol.png" type="image/x-icon">
    <title>Elimado!</title>
    <div class="wrap">
        <div class="tittleImg">
                <img src="../styles/image/girasol.png" alt="" width="100px">
                <h1 class ="section-h1">Sunflower Payroll</h1>
            </div>
        <h1>Entidad eliminada con éxito.</h1>
        <div class="buttons">
            <input type="button" name="botonRegresar" value="Regresar al Menú" class="btn" onclick="regresarAlMenu()">
            <script>
                function regresarAlMenu() {
                    console.log('Se hizo clic en el botón');
                    window.location.href='../controlador/controladorListarEntidad.php';
                }
            </script>
        </div>
    </div>
    <?php
}
?>
