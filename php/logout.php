<?php
session_start();
if(session_destroy()){
   echo "
                 <script type=\"text/javascript\"> 
                 alert(\"Successfully Logged Out\");
                   window.location.href = 'http://localhost/PhpProject1/java5.html';
                 </script>
                  ";
   }
?>

