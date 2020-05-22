<?php
     require("conexionbd.php");
     $per=new conexionbd("ciegos");

     if (isset($_POST["btninsertar"])){
     $per-> insertar("batoon");
    // alert ( $per-> insertar("city"));
     $per-> cerrar();
     }
?>
<html>
<body>
    <form action= "insertar.php" method="post">
<table border="1">
    <tr>
    <td>nombre</td>
    <td><input type="text" name="txtnombre" size="15" maxlengh="15"></td>
    </tr>
    <tr>
    <td>direccion</td>
    <td><input type="text" name="txtdireccion" size="15" maxlengh="15"></td>
    </tr>
    <tr>
    <td>telefono</td>
    <td><input type="text" name="txttelefono" size="15" maxlengh="15"></td>
    </tr>
    <tr>
    <input type="submit" name="btninsertar" value="Insertar">
    </tr>
    </table>
    </table>
</body>
</html>