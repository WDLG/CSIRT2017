<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Bienvenido al Sistema</h1> 
      <h2>INFORMACION DE MIEMBROS</h2>
       <?php

           $result = mysqli_query($db,"SELECT nombre, Password FROM usuarios"); 
            if ($row = mysqli_fetch_array($result)){ 
            echo "<table border = '1'> \n"; 
            echo "<tr bgcolor='#9acd32'><td>Nombre</td><td>PASSWORD</td></tr> \n"; 
            do { 
                echo "<tr><td>".$row["nombre"]."</td><td>".$row["Password"]."</td></tr> \n"; 
            } while ($row = mysqli_fetch_array($result)); 
                echo "</table> \n"; 
            } else { 
               echo "¡ No se ha encontrado ningún registro !"; 
            }
       ?>
      <h2><a href = "logout.php">Salir</a></h2>
   </body>
   
</html>
