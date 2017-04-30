<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<title>Course Page!!!</title>
</head>
<body>
    <?php
           $con=mysqli_connect("localhost", "root", "admin", "new11");
          $uid=$_POST["uid1"];
          $a=mysqli_query($con,"select Password from stud where UserID='$uid'");
          if($a)
          {
               $row=mysqli_fetch_row($a);
               echo '<div id="header">
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
 Login Here!!!
 </h1>
        <form action="login.php" method="POST" name="fm">
            
            <table align="center" id="cont12">
<tr>
<td><label>UserId:</label></td>
<td><input type="text" name="uid" autofocus placeholder="eg:abc123"></td>
</tr>
<tr>
<tr>
<td><label> Password:</label></td>
<td><input type="text" name="pswrd" placeholder="admin"></td>
</tr>
<tr>
<td><input type="reset" name="reset"></td>
<td><input type="submit" name="submit"></td>
</tr>
</table>
        </form>            
            <h1>
 Forgot Password???
 </h1>
        <form action="forgot.php" method="POST" name="fm">
            
            <table align="center" id="cont112">
<tr>
<td>Your Password is-'.$row[0].'</td>
 </tr> 
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
                 alert(\"Invalid User\");
                   window.location.href = 'http://localhost/PhpProject1/java5.html';
                 </script>
                  ";
          }
              
          mysqli_close($con);
          
?>
</body>
</html>
