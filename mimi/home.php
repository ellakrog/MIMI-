<?php
   include('config.php');
   
?>
<html>
   
   <head>
      <title>Welcome to our site!</title>
	  <head>
<style>

.container { 
	position:relative; 
	padding:0 0 0 55px;

	}
#sidebar {
    position:absolute;
    top:0; bottom:0; left:0;
    width:300px;
	margin-top:107px;
	margin-left:54px;
}

#header { 
			
			width:1800px; 
			height:100px; 
			background-color:rgba(0, 108, 139, 0.3);
}
#header h3{
			font-size:60px;
			text-align:center;
			padding-top:20px;
			color:rgba(165, 79, 0, 0.7);
}

#content1 { 
	
	position:absolute;
    top:0; bottom:0; left:0 ; 
    width:1500px;
	margin-top:107px;
	margin-left:354px;
	
}



#footer { 
		
		width:1801px; 
		height:15px;
		background:rgba(0, 108, 139, 0.3);
		
}

#sidebar a {
	padding: 50px 8px 8px 50px;
    text-decoration: none;
    font-size: 25px;
    color:rgba(165, 79, 0, 0.7);
    display: block;
    transition: 0.3s
	
}
#sidebar a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}
.sidenav {
    height: 25%; 
    width:0; 
    position: fixed; 
    z-index: 1;
    top: 115px;
    left:362px;
    background-color:rgba(0, 0, 0, 0.5);
    overflow-x: hidden; 
    padding-top: 60px; 
    transition: 0.5s; 
}

/* The navigation menu links */
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color:rgba(165, 79, 0, 0.7);
    display: block;
    transition: 0.3s
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
 a {
	padding: 50px 8px 8px 50px;
    text-decoration: none;
    font-size: 25px;
    color:rgba(165, 79, 0, 0.7);
    display: block;
    transition: 0.3s
	
}
 a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}
</style>

<div class="container">
    <div id="sidebar">
	
	<a <button style="width:150px;"onclick="openNav()">MODA</button></a><br/>
	<a <button style="width:150px;"onclick="openNav1()">LJEPOTA</button></a><br/>
	<a <button style="width:150px;"onclick="openNav2()">SHOPPING</button></a><br/>
	<a href="#">Contact</a>
	<a href="index.php">Log In/Sing In</a>
	
	</div>
    <div id="header">
	<h3>LifeStyle by Mimi :)</h3>
	</div>
	
   
	
	<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a href="kolekcija.php">KOLEKCIJE</a>
	<a href="#">MODNI EVENTI</a>
	<a href="#">MODNI SAVJETI</a>
	<a href="#">MUST HAVE</a>
	</div>
	<div id="mySidenav1" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
	<a href="#">FRIZURE</a>
	<a href="#">MAKE UP</a>
	<a href="#">PARFEMI</a>
	</div>
	<div id="mySidenav2" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
	<a href="#">CIPELE</a>
	<a href="#">HALJINE</a>
	<a href="#">KUPACI KOSTIM</a>
	<a href="#">MODNI DODACI</a>
	</div>
    
		
	<script>
	function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
	}
	function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
	function openNav1() {
    document.getElementById("mySidenav1").style.width = "250px";
	}
	
/* Set the width of the side navigation to 0 */
	function closeNav1() {
    document.getElementById("mySidenav1").style.width = "0";
}
function openNav2() {
    document.getElementById("mySidenav2").style.width = "250px";
	}
	function closeNav2() {
    document.getElementById("mySidenav2").style.width = "0";
}
	</script>	
	
		
	
	</html>