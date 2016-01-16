<?php
include_once 'cn.php';
?>

         <?php
         if($conn->connect_error)die($conn->connect_error);
         $query="SELECT pkSeccion,codSeccion FROM Seccion ORDER BY codSeccion ASC;";
         $result=$conn->query($query);
         if(!$result)die ("Database access failed: ".$conn->error);
         while($row = mysqli_fetch_array($result))
         {

           echo "<p>".$row['codSeccion']."</p>";
           echo "<p>".$row['codSeccion']."</p>";
          //  echo "<a href='#' style='text-transform: uppercase;'>".$row['codCurso']." ".$row['descCurso']."</a>";
         }
        ?>



          <!-- Modal content-->
<script src="js/evento.js"></script>
