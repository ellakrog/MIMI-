
<?php

include ('config.php');
 
if(isset($_POST['Submit'])) {    
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
	
        //ubacivanje podataka u bazu
    $update="INSERT INTO user(username,password,email)VALUES('$name','$pass','$email')";
	if (mysqli_query($dbC ,$update )) {
     header("location:index.php");
} else {
    echo "Error: " . $update . "<br>" . mysqli_error($dbC);
	
}

mysqli_close($dbC);
}
?>
   

