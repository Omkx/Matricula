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

<title>Franklin University</title>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Franklin University Welcomes You</h1>
                <p class="lead">Dare To Learn</p>
                          </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
