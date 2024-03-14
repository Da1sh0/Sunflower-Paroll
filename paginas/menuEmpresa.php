<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles1.css">
    <link rel="shortcut icon" href="../styles/image/girasol.png" type="image/x-icon">
    <title>Sunflower Payroll</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="section">
        <div class="tittleImg">
            <img src="../styles/image/girasol.png" alt="" width="100px">
            <h1 class ="section-h1">Sunflower Payroll <br> Empresas</h1>
        </div>
        <div class="buttons">        
            <form action="../controlador/controladorRegistrarEntidad.php" method="post">
                <input type="submit" value="Registar empresa" class="btn">
            </form>
            <form action="../controlador/controladorListarEntidad.php" method="post">
                <input type="submit" value="Listar empresa" class="btn">
            </form>
            <form action="../" method="post">
                <input type="submit" value="Volver al Inicio" class="btn">
            </form>
        </div>
    </form>
</body>
</html>