
<?php

$username = $_POST['username']; 
$password = $_POST['password']; 


if(isset($username, $password)) {
   
    include('config.php'); 
    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);
    $myusername = mysqli_real_escape_string($dbC, $myusername);
    $mypassword = mysqli_real_escape_string($dbC, $mypassword);
    $sql="SELECT * FROM admin WHERE username='$myusername' and password='$mypassword'";
    $result=mysqli_query($dbC, $sql);
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
        
        header("location:admin.php");
    }
   
    if($count==0){
    $sql1="SELECT * FROM user WHERE username='$myusername' and password='$mypassword'";
    $res=mysqli_query($dbC, $sql1);
    // Mysql_num_row is counting table row
    $count1=mysqli_num_rows($res);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count1==1){
        
        header("location:user.php");
    }
	
	else{
		header('location:singin.php');
	}
    
	}
}
else {
       header("Error!");
}

mysqli_close($dbC);
?>