<?php
require('homepage.html');
?>
<style>
#blok1{
	width:300px;
	height:300px;
	margin-left:1100px;
	margin-top:100px;
	}
#blok1 h1{
	margin-left:1px;
	font-size:18;
}

</style>

<div id="content1" >
		 
		 <div id="blok1" >
		  <h1>Novi Korisnik:</h1>
		 <form action = "singin1.php" method = "POST" >
                  <label>Username  :</label>
				  <input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label>
				  <input type = "password" name = "password" class = "box" /><br/><br /> 
				  <label>Email  :</label>
				  <input style="margin-left:22px" type = "text" name = "email" class = "box"/><br /><br />
                  <input type = "submit" name="Submit" value = " Sing In! "/><br />
               </form>
		 </div>
	</div>
	</div>
