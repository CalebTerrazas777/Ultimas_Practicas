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
        Edad del alumno:
        <input type="text" name="edad">
        <br><br>
        Pasatiempos del alumno:
        <input type="text" name="pasatiempos">
        <br><br>
        <button type="Submit" name="guardar">Guardar</button>
    </form>
    <?php
    if (isset($_POST['guardar'])){
        $nombre=$_POST['nombre'];
        $edad=$_POST["edad"];
        $pasatiempos=$_POST["pasatiempos"];
        file_put_contents("Alumnos.txt", $nombre . PHP_EOL, FILE_APPEND);
        file_put_contents("Edades.txt", $edad . PHP_EOL, FILE_APPEND);
        file_put_contents("Pasatiempos.txt", $pasatiempos . PHP_EOL, FILE_APPEND);
        echo "<p>Informacion guardada correctamente.</p>";}
    ?>
    <h3>Lista de alumnos de 3°A registrados</h3>
    <?php
    if (file_exists("Alumnos.txt")){
        $contenido=file_get_contents("Alumnos.txt");
        echo nL2br($contenido);
        echo "<br>";}
    else
        {echo "No existen registros." . "<br>";}

    if (file_exists("Edades.txt")){
        $contenido=file_get_contents("Edades.txt");
        echo nL2br($contenido);
        echo "<br>";}
    else
        {echo "No existen registros." . "<br>";}

    if (file_exists("Pasatiempos.txt")){
        $contenido=file_get_contents("Pasatiempos.txt");
        echo nL2br($contenido);
        echo "<br>";}
    else
        {echo "No existen registros." . "<br>";}

    $contenido='Alumnos.txt';

    if (file_exists($contenido)){
        if (unlink($contenido)){
            echo 'Archivo eliminado.';}
         else {
            echo 'No se pudo eliminar el archivo.';}}
        else{
            echo 'El archivo no existe.';
        }

    $contenido='Edades.txt';

    if (file_exists($contenido)){
        if (unlink($contenido)){
            echo 'Archivo eliminado.';}
         else {
            echo 'No se pudo eliminar el archivo.';}}
        else{
            echo 'El archivo no existe.';
        }

    $contenido='Pasatiempos.txt';

    if (file_exists($contenido)){
        if (unlink($contenido)){
            echo 'Archivo eliminado.';}
         else {
            echo 'No se pudo eliminar el archivo.';}}
        else{
            echo 'El archivo no existe.';
        }
?>
</body>
</html>