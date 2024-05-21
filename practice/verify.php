<?php include('db_connection.php'); ?>
<?php
$resultnumber = mysqli_query($conn,"SELECT * FROM `carnumber`");
$carnumber = $getRowAssoc = mysqli_fetch_assoc($resultnumber);
$carnumber = $getRowAssoc['number'];
$final = "DELETE FROM `carnumber`";
if($carnumber == NULL){
	echo '<script> alert("Car Number not found. You can add the number physically") </script>';
	$del = mysqli_query($conn,$final);
	echo "<script>window.location.href='physically.php';</script>";
    	exit;
}
else{
	$result = mysqli_query($conn,"SELECT COUNT(*) AS num FROM `local_car_details` WHERE Car_Number='$carnumber'");
	$row = mysqli_fetch_assoc($result);
	$numusers = $row['num'];
	$add = mysqli_query($conn,"INSERT INTO `logs`(`Car_Number`, `Date`, `Time`) VALUES ('$carnumber',CURRENT_DATE,CURRENT_TIME)");
	if($numusers == 1){
		echo '<script> alert("Allow Entrty") </script>';
		$del = mysqli_query($conn,$final);
		echo "<script>window.location.href='scan.html';</script>";
    		exit;
	}
	else{
		$addguest = mysqli_query($conn,"INSERT INTO `guest_cars`(`Car_ID`, `Car_Number`) VALUES (' ','$carnumber')");
		echo '<script> alert("New Vehicle! Deny Entry!") </script>';
		$del = mysqli_query($conn,$final);
		echo "<script>window.location.href='scan.html';</script>";
    		exit;
	}
}
?>
<?php include('scan.html');?>