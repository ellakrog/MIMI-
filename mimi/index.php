<?php
require('homepage.html');
?>
<style>
#blok1{
	width:300px;
	height:300px;
	margin-left:1110px;
	margin-top:100px;
	}

</style>

<div id="content1" >
		 
		 <div id="blok1" >
		
		 <form action = "login.php" method = "POST" >
                  <label>Username  :</label>
				  <input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label>
				  <input type = "password" name = "password" class = "box" /><br/><br /> 
                  <input style="background-color:rgba(151, 0, 74, 0.2); border-radius:13px" type = "submit" name="Submit" value = " Log In! "/><br />
				  
               </form>
			   <a href="singin.php"><button style="background-color:rgba(151, 0, 74, 0.2); border-radius:13px">Novi Korisnik</button></a>
     
	</div>
	</div>
