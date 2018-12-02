<?php
include('config.php');
include('home.php');

?>
<style>
#novipost{
	width:600px;
	heigth:300px;

	margin:40px 350px 0 250;
}
</style>
<div id="content1" >
<a href="adminVjencanice.php"><button style="background-color:rgba(151, 0, 74, 0.2); border-radius:13px">Go Back</button></a>
<form action="addpost.php" method="POST">
<div id="novipost">
	<label style="font-size:40px; color:rgba(165, 79, 0, 0.7);">Title:</label><br/>
	<input style="width:500px; height:50px " type="text" name="title"><br/>
</div>
<div id="novipost">
	<label style="font-size:40px; color:rgba(165, 79, 0, 0.7);" >Subtitle:</label>
	<input style="width:500px; height:50px " type="text" name="subtitle"><br/>
</div>
<div id="novipost">
	<label style="font-size:40px; color:rgba(165, 79, 0, 0.7);">Content:</label>
	<input style="width:500px; height:50px " type="text" name="content"><br/>
</div>
	 <input style="background-color:rgba(151, 0, 74, 0.2); border-radius:13px; margin:10px 0 0 700px" type = "submit" name="Submit" value = "Objavi! "/><br />
</form>

</div>

