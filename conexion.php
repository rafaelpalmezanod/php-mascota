<?php
$mysqli = new mysqli( "SERVE" ,"USER","PASS","DATABASE","PORT" );
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";