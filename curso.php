<?php
include_once 'temp.php';
?>
<title>Grade</title>
 <!-- Page Content -->
    <div class="container">

        <div class="row" id="inCurso">
            <div class="col-lg-12 text-center">
                <h1>CURSOS</h1>
            </div>
        <!-- /.row -->
        <div class="form-group" style="padding-left: 1em;">
          <label>CURSOS DISPONIBLES</label>
         <?php
         if($conn->connect_error)die($conn->connect_error);
         $query="SELECT pkCurso,descCurso FROM Curso ORDER BY descCurso ASC;";
         $result=$conn->query($query);
         if(!$result)die ("Database access failed: ".$conn->error);
         while($row = mysqli_fetch_array($result))
         {
           echo "<br>";
           echo "<a href='#' style='text-transform: uppercase;'>".$row['descCurso']."</a>";
         }
        ?>
        </div>

         </div>
       <div class="form-group" id="u2"> </div>
       </div>


<?php include_once('footer.php') ?>
<script src="js/evento.js"></script>
