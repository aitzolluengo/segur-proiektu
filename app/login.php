<?php
	include 'includes/databaseraKonektatu.php';
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$erabiltzaile = $_POST['erabiltzaile'];
		$pasahitz = $_POST['pasahitz'];
	
		$stmt = $conn->prepare("SELECT pasahitz FROM ERABILTZAILEAK WHERE erabiltzaile = ?");
		$stmt->bind_param("s", $erabiltzaile);

	}
