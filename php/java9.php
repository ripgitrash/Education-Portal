<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<title>Course Page!!!</title>
</head>
<body>
 <div id="header">
              <p><strong><u>JAVA</u></strong></p>
</div>
    <ul>
         <li><a href="java1.html">Intro</a></li>
                
  <li><a href="java3.html">Quiz</a></li>
  <li><a href="java4.html">Register</a></li>
    <li><a href="java5.html">Login</a></li>
     <li><a href="java6.html">Admin</a></li>
   <li><a href="java9.php">User Ratings</a></li>
 
      </ul>

    <?php
$con=mysqli_connect("localhost", "root", "admin", "new11");
          $c1=$_POST["r"];
          $c=0;    
          $d=0;
          $e=0;
          $f=0;
          $g=0;
          if($c1==1)
          {
          $c=1;    
          
          }
          if($c1==2)
          {
            $d=1;
          
          }
          if($c1==3)
          {
          $e=1;
          }
          if($c1==4)
          {
              
          $f=1;
          
          }
          if($c1==5)
          {
            $g=1;
          }
          $z=mysqli_query($con,"insert into stud1 values('$c','$d','$e','$f','$g')");
           $u=mysqli_query($con,"SELECT sum(one) FROM stud1");
          $u1=mysqli_query($con,"SELECT sum(two) FROM stud1");
          $u2=mysqli_query($con,"SELECT sum(three) FROM stud1");
          $u3=mysqli_query($con,"SELECT sum(four) FROM stud1");
          $u4=mysqli_query($con,"SELECT sum(five) FROM stud1");
          $row1=mysqli_fetch_row($u4);
          $row2=mysqli_fetch_row($u3);
          $row3=mysqli_fetch_row($u2);
          $row4=mysqli_fetch_row($u1);
          $row5=mysqli_fetch_row($u);
echo '<div id="cont9">
    <h1>Feedback Results</h1>
     <img height=80px width=300px src="51.jpg">'.'->'. $row1[0]
         .'<br>
     <img height=80px width=300px src="4.png">'.'->'. $row2[0].'<br>   
<img height=80px width=300px src="3.png">'.'->'. $row3[0].'<br>
    <img height=80px width=300px src="2.png">'.'->'. $row4[0].'<br>
        <img height=80px width=300px src="1.png">'.'->'. $row5[0].'<br>
     <h1>
</div>    
<footer>
     <span id="copy"><u>Social Profiles-></u></span>&nbsp;&nbsp;<div id="icon"><a href="www.facebook.com"><img class="imf" src="download.jpg"></a>&nbsp;
    <a href="www.gmail.com"><img class="imf" src="download.png"></a>&nbsp;<a href="www.linkedin.com"><img class="imf" src="download%20(1).jpg"></a></div>
</footer>';
;
          

?>
    </body>
</html>
