<?php


	$connection = mysqli_connect('localhost','Enrique','1234','book_db');

	if ($connection->connect_error){
		die($connection->connect_error);
	}
	if(isset($_POST['send'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$location = $_POST['location'];
		$guests = $_POST['guests'];
		$arrival = $_POST['arrival'];
		$departure = $_POST['leaving'];

		$request = "insert into book_form (name, email, phone, address, location, guests, arrival, departure) values ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrival', '$departure')";

		mysqli_query($connection,$request);

		header('location:book.php');
	}
	else{

		echo "Something went wrong try again";
	}

?>
