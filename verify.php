<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

require_once ('temp.php');

$username = $_POST["username"];
$password = $_POST["pwd"];
$flag = 'true';

//$query = $mysqli->query("SELECT email, password from users");


$result = $conn->query("SELECT pkAlumno,codigo,password,nombre,facultad from Alumno where codigo = '".$username."' and password = '".$password."' ;");
if($result === FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->codigo === $username && $obj->password === $password) {

      $_SESSION['username'] = $username;
      $_SESSION['type'] = "user";
      $_SESSION['pkAlumno'] = $obj->pkAlumno;
      $_SESSION['nombre'] = $obj->nombre;
      $_SESSION["autentificado"] = "Si";
      header("location:index.php");
    }
  }
  echo "SELECT pkProfesor,codPro,password,nombrePro,facultadPro from Profesor where codPro = '".$username."' and password = '".$password."' ;";
    $result1 = $conn->query("SELECT pkProfesor,codPro,password,nombrePro,facultadPro from Profesor where codPro = '".$username."' and password = '".$password."' ;");
    if($result1 === FALSE){
      die(mysql_error());
    }

    if($result1){
      while($obj = $result1->fetch_object()){
        if($obj->codPro === $username && $obj->password === $password) {

          $_SESSION['username'] = $username;
          $_SESSION['type'] = "admin";
          $_SESSION['pkProfesor'] = $obj->pkAlumno;
          $_SESSION['nombrePro'] = $obj->nombre;
          $_SESSION["autentificado"] = "Si";
          header("location:index.php");
        }
      }
    }
}

// function redirect() {
//   echo '<h1>Invalid Login! Redirecting...</h1>';
//   header("Refresh: 3; url=index.php");
// }


?>
