<?php
class conexionbd{
     private $usuario;
     private $password;
     private $servidor;
     private $basededatos;
     private $conexion;

     public  function conexionbd($bd)
     {
          $this->usuario ="root";
          $this->password="";
          $this->servidor="localhost";
          $this->basededatos=$bd;
          $this->conectar($this->basededatos);
     }
     //conectar con el servidor y crear la conexion. Y al seleccionar base de datos y vincular a la conexion
     private function conectar($basededatos)
     {
        $this->conexion = mysqli_connect( $this->servidor, $this->usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
        // Selección del a base de datos a utilizar
        $db1 = mysqli_select_db( $this->conexion, $this->basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
             //creacion de la conexion a la base de datos con mysql_connect()
       //     $this->conexion=mysqli_connect($this->servidor,$this->usuario, "") or die("No se ha podido conectar al servidor de Base de datos");
             //seleccion de la base de datos a utilizar 
         //   $db=mysqli_select_bd($this->conexion,"world")or die ("Upps! Pues va a ser que no se ha podido conectar a la base de datos");
            
     } 
     public function consultatabla($tabla)
     {
         $consulta="SELECT * FROM $tabla";
         $resultado=mysqli_query($this->conexion, $consulta) or die ("Algo ha ido mal en la consulta a la base de datos");

         echo "<table borde='2'>";
         echo "<table borde='1'>";
         echo "<tr>";
         echo "<tr><th>nombre</th><th>direccion</th><th>telefono</th>";
         echo "</tr>";
        
         while ($row=mysqli_fetch_array($resultado))
         {
             echo "<tr>";
             echo "<td>",$row['nombre'],"</td><td>",$row['direccion'],"</td><td>",$row['telefono'],"</td>";
             echo "</tr>";
         }
         echo"</table>";
     }
     public function consultauno($tabla,$nombre){
         $consulta= "SELECT * FROM  $tabla where nombre=$nombre";
         $resultado=mysqli_query($this->conexion,$consulta) or die("Algo ha ido mal en la consulta a la base de datos");

         echo "<table borde='2'>";
         echo "<table borde='1'>";
         echo "<tr>";
         echo "<tr><th> nombre </th><th>direccion</th><th>telefono</th>";
         echo "</tr>";

         if($row=mysqli_fetch_array($resultado))
         {
             echo "<tr>";
             echo "<td>", $row['nombre'],"</td><td>",$row['direccion'],"</td><td>",$row['telefono'],"</td>";
             echo "</tr>";
             echo "</table>";    
         }
         else echo "no se encontro el metodo";
         
     }
     public function insertar($tabla)
     {
         $nombre="nombre";
         $direccion="direccion";
         $telefono="telefono";
       
         $query="INSERT INTO bastoon (nombre,direccion,telefono) values ('$_POST[txtnombre]','$_POST[txtdireccion]','$_POST[txttelefono]')";
         mysqli_query($this->conexion,$query) or die ("fallo la consulta".mysqli_error($this->conexion));
         $query="SELECT * FROM bastoon";
         $result=mysqli_query($this->conexion,$query)or die ("La consulta fallo".mysqli_error($this->conexion)); 
         return $result;
     }
     public function eliminar($tabla)
     {
         $query="DELETE FROM bastoon WHERE bastoon='$_POST[txtnombre]'";
         mysqli_query($this->conexion,$query) or die ("fallo la consulta".mysqli_error($this->conexion));
         $query="SELECT * FROM bastoon";
         $result=mysqli_query($this->conexion,$query)or die ("La consulta fallo".mysqli_error($this->conexion)); 
     }
     public function cerrar()
         {
             mysqli_close($this->conexion);
         }
}