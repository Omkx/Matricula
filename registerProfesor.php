<?php
include_once 'temp.php';
?>
<title>New Registration</title>
<?php
if(isset($_POST['nombrePro']))
{

  $nombrePro=$_POST['nombrePro'];
  $facultadPro=$_POST['facultadPro'];
  $codPro=$_POST['codPro'];
  $password=$_POST['password'];
  $emailPro=$_POST['emailPro'];
  $dniPro=$_POST['dniPro'];
  $fnacPro=$_POST['fnacPro'];
  $sexoPro=$_POST['sexoPro'];

  if($conn->connect_error)die($conn->connect_error);
  $query="INSERT INTO Profesor (nombrePro,facultadPro,codPro,password,emailPro,dniPro,fnacPro,sexoPro) values('$nombrePro','$facultadPro','$codPro','$password','$emailPro','$dniPro','$fnacPro','$sexoPro');";
  $result=$conn->query($query);
  if(!$result)die ("Database access failed: ".$conn->error);

  }

?>
<!-- Page Content -->

    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>REGISTRAR PROFESOR</h1>
            </div>
        <!-- /.row -->
    </div>

  <form role="form" name="form" method="POST" action="registerProfesor.php">

  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombrePro" name='nombrePro' placeholder="Introducir nombre" required>
  </div>

  <div class="form-group">
    <label for="facultad">Facultad</label>
    <input type="text" class="form-control" id="facultadPro" name="facultadPro" placeholder="Introducir facultad" required>
  </div>
  <div class="form-group">
    <label for="codigo">Codigo del Estudiante</label>
    <input type="text" class="form-control" id="codPro" name="codPro" placeholder="Introducir codigo" required>
  </div>
  <div class="form-group">
    <label for="codigo">Contraseña</label>
    <input type="text" class="form-control" id="password" name="password" placeholder="Introducir codigo" required>
  </div>
  <div class="form-group">
    <label for="email">Correo Electronico</label>
    <input type="email" class="form-control" id="emailPro" name="emailPro" placeholder="Introducir email" required>
  </div>
  <div class="form-group">
    <label for="dni">DNI</label>
    <input type="text" class="form-control" id="dniPro" name="dniPro" pattern="[0-9]{8}" placeholder="Introducir dni" required>
  </div>
  <div class="form-group">
    <label for="fnac">Fecha de Nacimiento</label>
    <input type="text" class="form-control" id="fnacPro" name="fnacPro" placeholder="Introducir fecha de Nacimiento" required>
  </div>
  <div class="form-group">
    <label for="sexo">Sexo</label>
    <input type="text" class="form-control" id="sexoPro" name="sexoPro" placeholder="Introducir sexo" required>
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
