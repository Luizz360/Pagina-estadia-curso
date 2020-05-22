<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<script src="jquery-3.4.1.min.js" type="text/javascript"></script>
        <script language="javascript" type="text/javascript">
 $(document).ready(function ()
{
    var valor;
    $("#opcion").click(function (event){
  
        valor=$("#menu").val();
       
        switch(valor){
            case "1": $("#contenedor").load('mostrartodo.php');
            break;
            case "2": $("#contenedor").load('mostraruno.php');
            break;
            case "3": $("#contenedor").load('insertar.php');
            break;
            case "4": $("#contenedor").load('eliminar.php');
            break;
            case "5": $("#cinco").load('modificar.php');
            break;
        }
    });
});
</script>
</head>
<body>
<select id="menu">
   <option value="1">Mostrar Todos</option>
   <option value="2">Mostrar Uno</option>
   <option value="3">Insertar</option>
   <option value="4">Eliminar</option>
   <option value="5">Modificar</option>
</select>
<input type="button" id="opcion" valvue="seleccionar">
<section id="contenedor">
</section>
</body>
</html>