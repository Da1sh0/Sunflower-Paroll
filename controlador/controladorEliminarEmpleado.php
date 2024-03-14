<?php
require('../dao/DaoEmpleadoImpl.php');
require_once('../modelo/Empleado.php');

$dao = new DaoEmpleadoImpl();

if (isset($_GET['numeroIdentificacionE'])) {
    $numeroIdentificacionE = $_GET['numeroIdentificacionE'];
    $empleado = new Empleado($numeroIdentificacionE, null, null, null, null, null, null, null, null, null, null);
    $dao->eliminar($empleado);
    ?>
    <link rel="stylesheet" href="../styles/styles2.css">
    <link rel="shortcut icon" href="../styles/image/girasol.png" type="image/x-icon">
    <title>Elimado!</title>
    <div class="wrap">
        <div class="tittleImg">
                <img src="../styles/image/girasol.png" alt="" width="100px">
                <h1 class ="section-h1">Sunflower Payroll</h1>
            </div>
        <h1>Empleado eliminado con éxito.</h1>
        <div class="buttons">
            <input type="button" name="botonRegresar" value="Regresar al Menú" class="btn" onclick="regresarAlMenu()">
            <script>
                function regresarAlMenu() {
                    console.log('Se hizo clic en el botón');
                    window.location.href='../controlador/controladorListarEmpleado.php';
                }
            </script>
        </div>
    </div>
    <?php
    // echo "Empleado eliminado con éxito.";
}
?>