$(document).ready(function() {
  $('a').on('click', function () {
          $("#inCurso").addClass('hidden');
          var valor = $(this).html();
          var conexion;
           if (window.XMLHttpRequest)
           {
               conexion = new XMLHttpRequest();
           }
           else
           {
               conexion = new ActiveXObject("Microsoft.XMLHTTP");
           }
           conexion.onreadystatechange=function()
           {
               if(conexion.readyState==4 && conexion.status==200){
                   document.getElementById("u2").innerHTML=conexion.responseText;
               }
          }
           var nCurso = "?nCurso=" + valor ;
           conexion.open("GET","calificarCurso.php" + nCurso,true);
           conexion.send();
         });
});



function ajaxFunction(){
  var conexion;
 if (window.XMLHttpRequest)
 {
     conexion = new XMLHttpRequest();
 }
 else
 {
     conexion = new ActiveXObject("Microsoft.XMLHTTP");
 }
 conexion.onreadystatechange=function()
 {
     if(conexion.readyState==4 && conexion.status==200){
         document.getElementById("u1").innerHTML=conexion.responseText;
     }
}
 conexion.open("GET","alumnos.php",true);
 conexion.send();
 }


 function ajaxFunction1(){
   var conexion;
  if (window.XMLHttpRequest)
  {
      conexion = new XMLHttpRequest();
  }
  else
  {
      conexion = new ActiveXObject("Microsoft.XMLHTTP");
  }
  conexion.onreadystatechange=function()
  {
      if(conexion.readyState==4 && conexion.status==200){
          document.getElementById("casual").innerHTML=conexion.responseText;
      }
 }
  conexion.open("GET","seccion.php",true);
  conexion.send();
  }
