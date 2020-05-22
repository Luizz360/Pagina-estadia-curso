<?php
     require("conexionbd.php");
     $per=new conexionbd("ciegos");
     if (isset($_POST["btnenviar"])){
     $per-> eliminar("bastoon");
     $per-> cerrar();
     }
?>
<html>
  <body>
    <form action="eliminar.php" method="post">
    <table border="1">
    <tr>
    <td>nombre</td>
    <td><input type="text" name="txtnombre" size="15" maxlengh="15"></td>
    <input type="submit" name="btnenviar" value="Eliminar">
    </tr>
    </table>
  </body>
</html>