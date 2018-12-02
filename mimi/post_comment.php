<?php
include('config.php');
if(isset($_POST['Submit'])) {    
    $ime = $_POST['ime'];
    $komentar = $_POST['komentar'];
  
        //ubacivanje podataka u bazu
    $update="INSERT INTO komentari(ime,komentar)VALUES('$ime','$komentar')";
	if (mysqli_query($dbC ,$update )) {
     header("location:vjencanice.php");
	 
} else {
    echo "Error: " . $update . "<br>" . mysqli_error($dbC);
	
}

mysqli_close($dbC);
}
?>