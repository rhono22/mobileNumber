<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=yes, minimum-scale=1.0">
		<title>And your phone number is...</title>
		<style>
			body {
				font: 17px sans-serif;
				color: #444;
				margin: 20px;
			}
			
		</style>
	</head>
	<body>
<?php
$headers = apache_request_headers();
 if(isset($header['x-up-calling-line-id']) && !empty($header['x-up-calling-line-id'])){ 
 $phone_number = $header['x-up-calling-line-id'];
 echo $phone_number ;
}else{
$error_phone_number = "Phone number missing...!"; 
}
?>
		
	</body>
</html>
