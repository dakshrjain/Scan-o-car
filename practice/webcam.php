<?php 
    if (isset($_POST["save_image"])){
        $uri = $_POST["image_URI"];
        file_put_contents("Captured\car" . ".png",file_get_contents($uri));
	header("Location: scan.html");
    }
?>
<?php include('main.php');?>
