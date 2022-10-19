<?php

$namaserver = "localhost";
$username = "id19717249_porto";
$password = "5lO/!rjVj%V7XyXb";
$namadb = "id19717249_rajwa";


	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_message = $_POST['contact_message'];

	// Database connection
	$conn = new mysqli('localhost','id19717249_porto','5lO/!rjVj%V7XyXb','id19717249_rajwa');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into regristration(contact_name, contact_email, contact_message) values(?, ?, ?)");
		$stmt->bind_param("sss", $contact_name, $contact_email, $contact_message);
		$execval = $stmt->execute();
		echo $execval;
		echo "
            <div class=\"alert alert-success alert-dismissible mt-2\">
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                <strong>Sukses!</strong> successfully....
            </div>";
		$stmt->close();
		$conn->close();
	}
?>