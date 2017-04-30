<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<?xml-stylesheet type="text/xml" href="javas.xsl"?>
<title>Course Page!!!</title>
</head>
<body>
<?php    
session_start();
 $con=mysqli_connect("localhost", "root", "admin", "new11");
           $uid=$_POST["uid"];
            $pswrd=$_POST["pswrd"];
            $_SESSION['username']=$uid;
          $a=mysqli_query($con,"select * from stud where UserID='$uid' and Password='$pswrd'");
          $row=mysqli_fetch_row($a);
          if($row)
          { 
            echo'<div id="header">'
              .'Welcome'.' '.$_SESSION['username'].' '.'<a href="logout.php">Logout</a>'.'<p><strong><u>JAVA</u></strong></p>
</div>
    <ul>
  <li><a href="java1.html">Intro</a></li>
<li><a href="java2.html">Tutorial</a></li>                
  <li><a href="java3.html">Quiz</a></li>
   <li><a href="java4.html">Register</a></li>
   <li><a href="java9.php">User Ratings</a></li>
      </ul>     
                <div id="cont111">
                <xml>

<java>
<new>
<Codename>Oak</Codename>
<Year>1996</Year>
<version>JDK1.0</version>
</new>
<new>
<Codename>Java</Codename>
<Year>1997</Year>
<version>JDK1.1</version>
</new>
<new>
<Codename>Playground</Codename>
<Year>1998</Year>
<version>J2SE1.2</version>
</new>
<new>
<Codename>Merlin</Codename>
<Year>2002</Year>
<version>J2SE1.4</version>
</new>
<new>
<Codename>Dolphin</Codename>
<Year>2011</Year>
<version>JavaSE7</version>
</new>
<new>
<Codename>Tiger</Codename>
<Year>2014</Year>
<version>JavaSE8</version>
</new>
</java>
</xml> 

<p style="text-align:center"><u>Versions</u></p>
 <ol>
<li><font size=5>JDK 1.0</font>
<li><font size=5>JDK 1.1</font>
<li><font size=5>J2SE 1.2</font>
<li><font size=5>J2SE 1.4</font>
<li><font size=5>Java SE 7</font>
<li><font size=5>Java SE 8</font>
</ol>
<p style="text-align:center"><u>Example Prog.</u></p>
        <font size=6><p>class HelloWorldApp {
    public static void main(String[] args) {
        System.out.println("Hello World!"); // Prints the string to the console.
    }
}</p>
<p style="text-align:center"><u>Video</u></p>
<video controls>
<source src="A31.mp4" type="video/mp4">
</video><br><br>
<form action="java9.php" method="POST">
<h3>How was your Experience??</h3>
<input type="radio" name="r" value="1">1
<input type="radio" name="r" value="2">2
<input type="radio" name="r" value="3">3
<input type="radio" name="r" value="4">4
<input type="radio" name="r" value="5">5<br>
<input type="submit" value="Submit">
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
          if(isset($_SESSION['hit']))
$_SESSION['hit']=$_SESSION['hit']+1;
else
$_SESSION['hit']=1;
echo "Page Hits=". $_SESSION['hit'];
 mysqli_close($con);
?>            
</body>
</html>

