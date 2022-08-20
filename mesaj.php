<?php 	

header("refresh:3; url=/menu/");
require("menu.html");


$isim  		 = $_POST['name'];
$mail   	 = $_POST['email'];
$mesaj       = $_POST['text'];


?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mesaj Form</title>
	<link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
<body>
	<div id="form-main">
		  <div id="form-div">
		  	
 			 <h1>Mesajınız</h1>
 			 	<p><?php echo $isim;  ?></p>
 			 	<p><?php echo $mail;  ?></p>
 			 	<p><?php echo $mesaj; ?></p>
		  </div>

    </form>
  </div>

</body>
</html>