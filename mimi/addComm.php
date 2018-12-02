<?php

include ('config.php');
 
if(isset($_POST['Submit'])) {    
   
    $komentar = $_POST['comentar'];
   
	
        //ubacivanje podataka u bazu
    $update="INSERT INTO komentar (comentar)VALUES('$komentar')";
	if (mysqli_query($dbC ,$update )) {
     header("location:vjencanice.php");
	 
} else {
    echo "Error: " . $update . "<br>" . mysqli_error($dbC);
	
}

mysqli_close($dbC);
}
?>