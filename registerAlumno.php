<?php
include_once 'temp.php';
?>
<title>New Registration</title>
<?php
if(isset($_POST['nombre']))
{

  $nombre=$_POST['nombre'];
  $facultad=$_POST['facultad'];
  $codigo=$_POST['codigo'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $dni=$_POST['dni'];
  $fnac=$_POST['fnac'];
  $sexo=$_POST['sexo'];

  if($conn->connect_error)die($conn->connect_error);
  $query="INSERT INTO Alumno (nombre,facultad,codigo,password,email,dni,fnac,sexo) values('$nombre','$facultad','$codigo','$password','$email','$dni','$fnac','$sexo');";
  $result=$conn->query($query);
  if(!$result)die ("Database access failed: ".$conn->error);

  }

?>
<!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>REGISTRAR ALUMNO</h1>
            </div>
        <!-- /.row -->
    </div>

  <form role="form" name="form" method="POST" action="registerAlumno.php">

  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name='nombre' placeholder="Introducir nombre" required>
  </div>

  <div class="form-group">
    <label for="facultad">Facultad</label>
    <input type="text" class="form-control" id="facultad" name="facultad" placeholder="Introducir facultad" required>
  </div>
  <div class="form-group">
    <label for="codigo">Codigo del Estudiante</label>
    <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Introducir codigo" required>
  </div>
  <div class="form-group">
    <label for="codigo">Contraseña</label>
    <input type="text" class="form-control" id="password" name="password" placeholder="Introducir contraseña" required>
  </div>
  <div class="form-group">
    <label for="email">Correo Electronico</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Introducir email" required>
  </div>
  <div class="form-group">
    <label for="dni">DNI</label>
    <input type="text" class="form-control" id="dni" name="dni" pattern="[0-9]{8}" placeholder="Introducir dni" required>
  </div>
  <div class="form-group">
    <label for="fnac">Fecha de Nacimiento</label>
    <input type="text" class="form-control" id="fnac" name="fnac" placeholder="Introducir fecha de Nacimiento" required>
  </div>
  <div class="form-group">
    <label for="sexo">Sexo</label>
    <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Introducir sexo" required>
  </div>


<button type="submit" class="btn btn-default" onclick="return check()">Submit</button>
</form>


</div>
    <!-- /.container -->
<script>
function check()
{

if($("#rollnum").val()=="" || $("#fname").val()=="" || $("#yearenr").val()=="")
{
alert("Mandator Field Empty");
return false;
}
else
return true;
}
</script>
