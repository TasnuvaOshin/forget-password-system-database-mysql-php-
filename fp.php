<?php

 include 'config.php';
 ?>
 
 <html>
 <head>
    <link rel="stylesheet" href="style.css"/>
 
 </head>
 <body>
 <header> <h1> Forget-Password Page </h1></header>
 <main> 
 <center>
 <form action="fp.php" method="POST">
<br> <label>Enter your Email 
 </label><br>
 <input type="email" name="email" placeholder="example@gmail.com"></input><br>
 
  <label> Enter your Password 
 </label> <br>
 <input type="password" name="pass" placeholder="*****" ></input><br>
 
 <label> Confirm your Password 
 </label> <br>
 <input type="password" name="cpass" placeholder="*****" ></input><br>
 
 <input type="submit" value="Submit" name="fpass" ></input>
 <input type="submit" value="Login" name="login" ></input>

 
 
 </form>
 
</center>

<?php

   
if(isset($_POST['fpass'])){
	
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$cpass = $_POST ['cpass'];
	
	if($pass == $cpass ){
		
		
		$query  ="select*from user where email='$email'";
		
		$query_check = mysqli_query($con,$query);
		
		if($query_check){
			
			
	       if(mysqli_num_rows($query_check) > 0){
			   
			   $query1 ="update user set pass='$pass'";
			   $query_run = mysqli_query($con,$query1);
			   
			   if($query_run){
				   echo "
				   <script>
				   
				   alert('Your Password is Updated');
				   window.location.href='home.php';
				   
				   </script>
				   
				   
				   ";
				   
				   
			   }
			   else{
				   
				  echo "
				   <script>
				   
				   alert('Your Password is not Updated try again !!!');
				   window.location.href='fp.php';
				   
				   </script>
				   
				   
				   ";
			   }
			   
			   
			   
		   }else {
			   
			   
		 echo "
				   <script>
				   
				   alert('Your email is not found Register 1st');
				   window.location.href='reg.php';
				   
				   </script>
				   
				   
				   ";
		   }
			
			
			
			
			
		}
		else{
			
		 echo "
				   <script>
				   
				   alert('Email Query not working ');
				   window.location.href='fp.php';
				   
				   </script>
				   
				   
				   ";
		}
		
		
		
		
		
		
		
		
		
	}else {
		
		 echo "
				   <script>
				   
				   alert('Your Password & confrim password not match');
				   window.location.href='fp.php';
				   
				   </script>
				   
				   
				   ";
	}
	
	
	
	
}
else{
	
	

}








?>



 
 </main>
 <footer>
 Powered By -tasnuva tabassum oshin
 </footer>
 
 
 
 
 </body>
 </html>