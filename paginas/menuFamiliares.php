<?php $emple=$_GET['idEmpl'] ?>

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
            <h1 class ="section-h1">Sunflower Payroll <br> Familiar</h1>        
        </div>
        <div class="form">
            <form action="#" method="get" class="form-container">
                <label for="idEmpl">Id empleado</label>
                <input type="text" id="idEmpl" name="idEmpl" class="form-control" value="<?php echo $emple ?>">
            </form>
        </div>
        <div class="buttons">  
            <form action="../controlador/controladorRegistrarFamiliar.php" method="post">
                <input type="submit" value="Registar familiar" class="btn">
            </form>
            <form action="../controlador/controladorListarFamiliar.php" method="post">
                <input type="submit" value="Listar familiar" class="btn">
                </form>
            <form action="../controlador/controladorListarEmpleado.php" method="post">
                <input type="submit" value="Volver al Inicio" class="btn">
            </form>
        </div>
    </div>
</body> 
</html>