<?php

 include 'config.php';
 ?>
 
 <html>
 <head>
    <link rel="stylesheet" href="style.css"/>
 
 </head>
 <body>
 <header> <h1> Login Page </h1></header>
 <main> 
 <center>
 <form action="home.php" method="POST">
<br> <label>Enter your Email 
 </label><br>
 <input type="email" name="email" placeholder="example@gmail.com"></input><br>
 
  <label> Enter your Password 
 </label> <br>
 <input type="password" name="pass" placeholder="*****" ></input><br>
 <input type="submit" value="Login" name="login" ></input>
 <a href="fp.php"><input type="button" value="Forget-Password" name="fpass" ></input></a>
 
 
 </form>
 
</center>
 
 </main>
 <footer>
 Powered By -tasnuva tabassum oshin
 </footer>
 
 
 
 
 </body>
 </html>