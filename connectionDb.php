<?php
$host = "ap-southeast.connect.psdb.cloud";
$dbname = "dbtest";
$username = "myby3my36o5y0407st0n";
$password = "pscale_pw_CQ7DpCk05KUZp3nYyGSOdDythTybifrp33FPPN0ovTI";
  $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
$mysqli = new mysqli( $host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
die("Connection error" . $mysql->connect_error);
}

return $mysqli;