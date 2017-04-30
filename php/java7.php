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
   <li><a href="java9.php">User Ratings</a></li>
 
      </ul>
    
                <div id="cont9">
                    <h1>
 Registered Users </h1>
               <table border="1px solid blue"  align="center" cellpadding="20px" cellspacing="10px">
                   <pre>
                   <tr>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
<th>UID</th>
<th>Password</th>
</tr>
                   </pre>
               </table>
                    
<?php    
$con=mysqli_connect("localhost", "root", "admin", "new11");
          $a=mysqli_query($con,"select * from stud");
          
           if($a)
          {
             
                while($row=mysqli_fetch_row($a)){
               echo '<table border="1px solid blue" align="center" cellpadding="10px" cellspacing="10px">
                   <tr>
<td>'.$row[0].'</td>
<td>'.$row[1].'</td>
<td>'.$row[2].'</td>
<td>'.$row[3].'</td>
<td>'.$row[4].'</td>
</tr>
</table>
        ';
               }
 echo '<h1>Delete User???
 </h1>
        <form action="java8.php" method="POST" name="fm">
            
            <table align="center" id="cont112">
 <tr>
<td><label>UserId:</label></td>
<td><input type="text" name="uid1" autofocus placeholder="eg:abc123"></td>
</tr>
<tr>
<td><input type="reset" name="reset"></td>
<td><input type="submit" name="submit"></td>
</tr>
            </table>
</form>  
     </div>    
<footer>
     <span id="copy"><u>Social Profiles-></u></span>&nbsp;&nbsp;<div id="icon"><a href="www.facebook.com"><img class="imf" src="download.jpg"></a>&nbsp;
    <a href="www.gmail.com"><img class="imf" src="download.png"></a>&nbsp;<a href="www.linkedin.com"><img class="imf" src="download%20(1).jpg"></a></div>
</footer>';
}
          else
          {
              echo "
                 <script type=\"text/javascript\"> 
                 alert(\"No Users Present\");
                   window.location.href = 'http://localhost/PhpProject1/java5.html';
                 </script>
                  ";
          }
 mysqli_close($con);
?>            
</body>
</html>

