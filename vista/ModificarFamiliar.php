<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>

<body>
    <section class="section">
        <div class="div">
            <form action="../controlador/controladorModificarFamiliar.php" method="GET">
                <caption>Modificar DE Familiar</caption>
                <tbody>
                    <?php
                    foreach ($familiar as $a) {
                        echo '<label for="cod_familiar">Codigo Familiar</label>';
                        echo '<input type="text" name="cod_familia" id="cod_familia" class="form-control" value="' . $a->getCodFamiliar() . '"readonly>';

                        echo '<label for="parentezco">Parentezco</label>';
                        echo '<input type="text" name="parentezco" id="parentezco" class="form-control" value="' . $a->getParentezco() . '">';

                        echo '<label for="documetof">Documento del Familiar</label>';
                        echo '<input type="text" name="documetof" id="documetof" class="form-control" value="' . $a->getDocumentoF() . '">';

                        echo '<label for="fechanacimientof">Fecha de nacimiento</label>';
                        echo '<input type="date" name="fechanacimientof" id="fechanacimientof" class="form-control" value="' . $a->getFechaNacimientoF() . '">';

                        echo '<label for="nombref1">Nombre</label>';
                        echo '<input type="text" name="nombref1" id="nombref1" class="form-control" value="' . $a->getNombreF1() . '">';

                        echo '<label for="apellidof1">Apellido</label>';
                        echo '<input type="text" name="apellidof1" id="apellidof1" class="form-control" value="' . $a->getApellidoF1() . '">';

                        echo '<label for="numeroidentificacione">Numero Identificacion Familiar</label>';
                        echo '<input type="text" name="numeroidentificacione" id="numeroidentificacione" class="form-control" value="' . $a->getNumeroIdentificacionE() . '"readonly>';
                        echo '<input type="submit" name="boton" value="Guardar cambios">';
                    }
                    ?>
                </tbody>
            </form>
        </div>
        <section class="section">
</body>


</html>
