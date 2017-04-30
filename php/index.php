<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">   
        <title>Sample</title>
    </head>
    <body>
        <?php
           $con=mysqli_connect("localhost", "root", "admin", "new11");
          $name=$_POST["nm"];
          $mob=$_POST["mob"];
          $email=$_POST["emal"];
           $uid=$_POST["uid"];
            $pswrd=$_POST["pswrd"];
          $a=mysqli_query($con,"insert into stud values ('$name','$mob','$email','$uid','$pswrd')");
          mysqli_close($con);
          if($a)
             echo "
                 <script type=\"text/javascript\"> 
                 alert(\"Registered\");
                   window.location.href = 'http://localhost/PhpProject1/java4.html';
                 </script>
                  ";
        ?>
    </body>
</html>
