<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$service=$_POST['service'];
		$product=$_POST['type-product'];
		$from_value=$_POST['from-value'];
		$to_value=$_POST['to-value'];
		$msg=$_POST['message'];

		$to='sckylabs@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Contact us form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Service :".$service."\n"."Product :".$product."\n"."Budget from value:".$from_value."\n"."Budget to value:".$to_value."\n"."Message:"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
