<html>
    <head>
        <meta charset="UTF-8">   
        <title>Course Page!!!</title>
    </head>
    <body>
        <?php
           $con=mysqli_connect("localhost", "root", "admin", "new11");
           $uid=$_POST["uid1"];
          $a=mysqli_query($con,"delete from  stud where UserID='$uid'");
          if($a)
             echo "
                 <script type=\"text/javascript\"> 
                 alert(\"User Deleted\");
                   window.location.href = 'http://localhost/PhpProject1/java6.html';
                 </script>
                  ";
                       else
             echo "
                 <script type=\"text/javascript\"> 
                 alert(\"Not a valid user\");
                   window.location.href = 'http://localhost/PhpProject1/java6.html';
                 </script>
                  ";
          mysqli_close($con);
        ?>
    </body>
</html>


