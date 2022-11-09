<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../../controller/controladorAlumno.php" method="post">
        nombre:<input type="text" name="nomAlumno" id="nomAlumno"><br>
        apellido:<input type="text" name="apeAlumno" id="apeAlumno"><br>
        correo:<input type="email" name="corAlumno" id="corAlumno"><br>
        telefono:<input type="number" name="telAlumno" id="telAlumno"><br>
        programa:<input type="text" name="progAlumno" id="progAlumno"><br>
        <input type="submit" name="btnNewAlumno" id="btnNewAlumno">
        <input type="reset" name="" id="">
    </form>
    <a href="../viewAlumno.php">Regresar</a>
</body>
</html>