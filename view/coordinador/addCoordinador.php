<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../../controller/controladorCoordinador.php" method="post">
        nombre:<input type="text" name="nomCoordinador" id="nomCoordinador"><br>
        apellido:<input type="text" name="apeCoordinador" id="apeCoordinador"><br>
        correo:<input type="email" name="corCoordinador" id="corCoordinador"><br>
        telefono:<input type="number" name="telCoordiandor" id="telCoordiandor"><br>
        <input type="submit" name="btnNewCoordinador">
        <input type="reset" name="" id="">
    </form>
    <a href="../viewCoordinador.php">Regresar</a>
</body>
</html>