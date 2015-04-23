<?php

if (isset($_POST['user']) && isset($_POST['password'])) {
	error_reporting(E_ALL ^ E_WARNING);

	$hostname = "ldap://10.0.0.210";
	$username = $_POST['user'];
	$password = $_POST['password'];

	$ldap = ldap_connect($hostname) or die ("Keine Verbindung zum LDAP-Server möglich!");
	$bind = ldap_bind($ldap, $username."@htlw3r.ac.at", $password);

	echo $bind ? "true" : "false";
}

?>