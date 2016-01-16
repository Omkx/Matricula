<?php
include_once 'temp.php';
?>
<title>Grade</title>
<div class='container '>
<form role="form" name="form" method="POST" action="grade2.php">

  <!-- <div class="form-group">
    <label for="rollnum">Student</label>

  <select  class="form-control" id="rollnum" name='rollnum'>
<option value="NULL">Name/Roll Number</option> -->
<table class="table">
  <thead>
    <tr>
      <th>CODIGO</th>
      <th>CURSO</th>
      <th>MATRICULA</th>
    </tr>
  </thead>
  <tbody>
         <?php
         if($conn->connect_error)die($conn->connect_error);
         $query="SELECT pkCurso,codCurso,descCurso FROM Curso ORDER BY descCurso ASC;";
         $result=$conn->query($query);
         if(!$result)die ("Database access failed: ".$conn->error);
         while($row = mysqli_fetch_array($result))
         {
          //  $nota= "<input type='button' class='btn btn-info' data-toggle='modal' data-target=''#myModal' id='".$row['pkCurso']."curso' name='".$row['pkCurso']."curso' value='Inscribirse' required>";
           $nota= "<button type='button' class='btn btn-info' data-toggle='modal' data-target='#myModal' id='".$row['pkCurso']."curso' name='".$row['pkCurso']."curso' onclick='ajaxFunction1();'>Inscribirse</button>";
           echo "<tr>";
           echo "<td>".$row['codCurso']."</td>";
           echo "<td>".$row['descCurso']."</td>";
           echo "<td>$nota</td>";
           echo "</tr>";
          //  echo "<a href='#' style='text-transform: uppercase;'>".$row['codCurso']." ".$row['descCurso']."</a>";
         }
        ?>
      </tbody>
      </table>
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body" id="casual">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
      <div class="form-group" id="u2"> </div>
</div>

<script src="js/evento.js"></script>
