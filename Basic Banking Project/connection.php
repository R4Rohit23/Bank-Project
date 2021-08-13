<?php
    $servername = 'localhost';
	$username = 'id17412758_mybank';
	$password = 'zkY0QR5g6Wl%Y30#';
	$dbname = 'id17412758_basic_bank';
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	  }
	  
	// $conn = mysqli_connect('shareddb-x.hosting.stackcp.net','shivangi','12345678@','malyaraaj-313537e38d');

?>