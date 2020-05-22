<?php
     require("conexionbd.php");
     $per=new conexionbd("ciegos");
     $per-> consultatabla("bastoon");
     ///alert ("mostrar");
     $per->cerrar();
?>