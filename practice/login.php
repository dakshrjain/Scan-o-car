<?php include('db_connection.php'); ?>
<?php include('loginpage.html'); ?>
<?php
$username = $_POST['username'];
$password = $_POST['password']; 
$password = SHA1($password);
$query = "SELECT * FROM `login_info` WHERE Username = '$username' AND Password = '$password'";
$mainresult = mysqli_query($conn,$query);
$mainrow = mysqli_num_rows($mainresult);
if($mainrow == 1){
	echo '<script> alert("Login Succesfull") </script>';
	echo "<script>window.location.href='admin.php';</script>";
    	exit;
}
else{
	echo '<script> alert("Either your Username or Password is Wrong") </script>';	
}

?>
