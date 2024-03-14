<?php
require('../dao/DaoFamiliarImpl.php');
require_once('../modelo/Familiar.php');

$dao = new DaoFamiliarImpl();

if (isset($_GET['cod_familiar'])) {
    $codFamiliar = $_GET['cod_familiar'];
    $familiar = new Familiar ($codFamiliar, null, null, null,  null, null, null);
    $dao->eliminar($familiar);
    echo "Familiar eliminado con éxito.";
}
?>
