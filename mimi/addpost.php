<?php

include ('config.php');
 
if(isset($_POST['Submit'])) {    
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $content = $_POST['content'];
	
        //ubacivanje podataka u bazu
    $update="INSERT INTO tb_clanci(title,subtitle,content)VALUES('$title','$subtitle','$content')";
	if (mysqli_query($dbC ,$update )) {
     header("location:vjencanice.php");
	 
} else {
    echo "Error: " . $update . "<br>" . mysqli_error($dbC);
	
}

mysqli_close($dbC);
}
?>