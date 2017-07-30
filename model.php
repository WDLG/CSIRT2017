<?php	
   include("config.php");
   session_start();
     $alias = $_POST['alias'];
     $pass = $_POST['cont'];

      try {
      $query = sprintf("select * from usuarios where  nombre= '%s' and Password = '%s' ; ", $alias, $pass);
      }catch(Exception $e){
            print_R($e);
      }
      $result = mysqli_query($db,$query);
      $datos = mysqli_fetch_row($result);

      /*$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];*/
      
      $count = mysqli_num_rows($result);
      

		
      if($datos != null) {
         $_SESSION['login_user'] = $alias;
         echo "Datos validos";
         header("location: welcome.php");
      }else {
         echo "Datos invalidos";  
    }   
   
?>



