<?php
//Datu basearen konfigurazioa
function dbKonektatu() {
	$db_host = 'db';
	$db_erab = 'admin';
	$db_pasahitz = 'test';
	$db_izena = 'database';

	//datu basearekin konekxioa nola egiten den
	$konekxioa = mysqli_connect($db_host,$db_erab,$db_pasahitz, $db_izena);

	//egiaztako dugu ea db-ra konektatu den bestela errore bat agertuko da.
	if(!$konekxioa) {
		die("Datu basean konektazean errorea: " . mysql_connect_error());
	}
	return $konekzioa;
}
function mysqlisortu(){
	$mysqli = new mysqli('db', 'admin', 'test', 'database');
	if($mysqli->connect_error){
		die("konekzio errore : " . $mysqli->connect_error);
	}
	return $mysqli;
}
