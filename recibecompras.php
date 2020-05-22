<html>
    <head><title>Recibe los datos del alumno en estadias </title></head>
    <?php
     echo "Registro: <b>" . $_POST['txtRegistro'] . "</b><br>";
     echo "Nombre: <b>" . $_POST['txtNombre']. "</b><br>";
     echo "Dirección: <b>" . $_POST['txtDirección'] . "</b><br>";
     echo "Teléfono: <b>" . $_POST['txtTeléfono'] . "</b><br>";
     echo "E-mail: <b>" . $_POST['txtE-mail'] . "</b><br>";
     echo "¿Cómo quiere su alarma para discapacitados?":"<ul>";
     if($_POST["CV1"]) echo "<li>De vibracion </li>";
     if($_POST['CV2']) echo "<li>Sonido</li>";
     if($_POST['CV3']) echo "<li>sensor</li>";
     echo "</ul>";
    
     echo "¿De qué color quiere su alarma para discapacitados?":"<ul>";
     if($_POST["CV1"]) echo "<li>Rojo </li>";
     if($_POST['CV2']) echo "<li>Negro</li>";
     if($_POST['CV3']) echo "<li>Blanco</li>";

     echo "</ul>";
     echo "Comentario del comprador:<br>" . $_POS['comentarios'];
    ?>
</html>
     