<?php
include('home.php');


?>
<style>
#slika img{
	width:1500px;
	height:200px;
	background:green;
}
#text{
	width:600px;
	margin:auto;
}
#text a{
	font-size:18px;
	color:black;
}
#text a:hover{
	font-size:18px;
	color:black;
}
#komentar{
	margin-left:450px;
}
</style>

<div id="content1" >
<div id="slika">
<img src="img/vjencanice.jpg" >

</div>
	 <?php
	include('config.php');
	$sql="SELECT * FROM tb_clanci ORDER BY id DESC";
	$result=mysqli_query($dbC,$sql);
	while($row=mysqli_fetch_array($result)){
		$title=$row['title'];
		$subtitle=$row['subtitle'];
		$content=$row['content'];
		?>
		<div id="text">
		<h2 ><?php echo $title; ?><br/>-<small><?php echo $subtitle; ?></small></h2>
		<p><?php echo $content; ?></p>
		
		<hr/>
		 </div>
	<?php
	
	}
 
 ?>
 <div id="komentar">
<?php

include ('config.php');
$sql="SELECT * FROM komentari ORDER BY id DESC";
	$result=mysqli_query($dbC,$sql);
	while($row=mysqli_fetch_array($result)){
		
	$comment_name=$row['ime'];
	$comment=$row['komentar'];
	echo "$comment_name - $comment<p>";
}
if(isset($_GET['error']))
{
	echo "<p> 300 character Limit";
}

?>


<form action="post_comment.php" method="POST">
	<input type="text" name="ime" value="Your Name"><br>
	<textarea  name="komentar" cols="50" rows="2">Enter a comment</textarea>
	<input  type="submit" name="Submit" value="Comment">
</form><br/><br/><br/>


</div>

</div>
