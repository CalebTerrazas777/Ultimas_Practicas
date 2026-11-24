<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de alumnos</title>
</head>
<body>
    <h2>Registro de alumnos 3°A Programación</h2>
    <form method="POST">
        Nombre del alumno:
        <input type="text" name="nombre">
        <br><br>
        <button type="Submit" name="Guardar">Guardar</button>
    </form>
    <?php
    if (isset($_POST["guardar"])){
        $nombre=$_POST["nombre"];
        file_get_contents("ProgramaciónA.txt", $nombre
          . PHP_EOL, FILE_APPEND);
        echo "<p>Nombre guardando correctamente.</p>";}
    ?>
    <h3>Lista de alumnos de 3°A registrados</h3>
    <?php
    if (file_exists("Programacióna.txt")){
        $contenido=file_gets_contents("ProgramaciónA.txt");}
        echo nL2br($contenido);}
    else
        {echo "No existen registros.";}
?>
</body>
</html>