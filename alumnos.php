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
<br>
<form role="form" name="form" method="POST" action="asignarNotas.php">

  <!-- <div class="form-group">
    <label for="rollnum">Student</label>

  <select  class="form-control" id="rollnum" name='rollnum'>
<option value="NULL">Name/Roll Number</option> -->
<table class="table">
  <thead>
    <tr>
      <th>CODIGO</th>
      <th>NOMBRES</th>
    </tr>
  </thead>
  <tbody>
 <?php

 // Alumno (nombre,facultad,codigo,email,dni,fnac,sexo) values('$nombre','$facultad','$email','$codigo','$dni','$fnac','$sexo');";
 // $query="INSERT INTO Alumno (nombre,facultad,codigo,email,dni,fnac,sexo) values('$nombre','$facultad','$email','$codigo','$dni','$fnac','$sexo');";
 // $result=$conn->query($query);
 // if(!$result)die ("Database access failed: ".$conn->error);

	  $query="select a.pkAlumno,a.codigo,a.nombre from Alumno a , AlumnoxCurso b where a.pkAlumno = b.fkAlumno;";
    $result=$conn->query($query);
    if(!$result)die ("Database access failed: ".$conn->error);
    $notas = array();
    while($fet = mysqli_fetch_array($result))
    {
      $nota= "<input type='number' class='form-control' id='".$fet['pkAlumno']."nota' name='".$fet['pkAlumno']."nota' min='01' max='20' placeholder='Introducir nota' required>";
      echo "<tr>";
      echo "<td>".$fet['codigo']."</td>";
      echo "<td>".$fet['nombre']."</td>";
      echo "<td>$nota</td>";
      echo "</tr>";
      echo "<input type='hidden' id='curso1' name='curso1' value='1'>";
      // echo "<input type='text' id='evaluacion' name='evaluacion' value='1'>";

      $notas[] = $fet['pkAlumno'];
    }
 ?>
      </tbody>
      </table>


  <!-- <div class="form-group">
    <label for="session">Session</label>
    <input type="text" class="form-control" id="session" name="session" placeholder="Enter session">
  </div> -->


<button type="submit" class="btn btn-default" onclick="return check()">Submit</button>
</form>

</div>
    <!-- /.container -->
<!-- <script>
function check()
{

if($("#codigo").val()=="NULL" || $("#session").val()=="")
{
alert("Field Empty");
return false;
}
else
return true;
}
</script> -->
