<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}

if ($_SESSION["autentificado"] != "Si") {
  header("Location: login.php");
}

require_once ('cn.php');

?>

<?php

if (!isset($_SESSION["type"]))
{
  require_once('header.php');
}else{
  if ($_SESSION["type"] != 'admin') {
    require_once('header.php');
  }else{
    require_once('headerAdmin.php');
  }
}

?>
<title>Grade</title>
 <!-- Page Content -->

        <div class="row">
            <div class="col-lg-12 text-center">
              <h1 style='text-transform: uppercase;'>NOTAS
              <?php
                $nCurso=$_GET['nCurso'];
                echo $nCurso;
              ?>
                </h1>
            </div>
        <!-- /.row -->
       </div>

       <div class="form-group">
          <label for="rollnum">EVALUACION</label>

      <select  class="form-control" id="evaluacion" name='evaluacion' style='text-transform: uppercase;' onchange="ajaxFunction();">
       <option value="0">SELECCIONAR</option>
         <?php
         if($conn->connect_error)die($conn->connect_error);
         $query="SELECT pkEvaluacion,tipoEvaluacion,descEvaluacion FROM Evaluacion ORDER BY descEvaluacion,tipoEvaluacion ASC;";
         $result=$conn->query($query);
         if(!$result)die ("Database access failed: ".$conn->error);
         while($row = mysqli_fetch_array($result))
         {
           echo "<option value = '".$row['pkEvaluacion']."' style='text-transform: uppercase;'>".$row['tipoEvaluacion']." ".$row['descEvaluacion']."</option>";
         }
        ?>
      </select>
      <div class="x" id="u1">

      </div>
<script src="js/evento.js"></script>
<?php include_once('footer.php') ?>
