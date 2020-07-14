<?php

$host = "ID323595_scuffedbase.db.webhosting.be";
$usr = "ID323595_scuffedbase";
$psw = "@dminDicer6";
$dbname = $usr;

$dumbfuck = "hello";
$conn = new mysqli($host, $usr, $psw, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);

}

echo "Yhdistyminen onnistui täydellisesti (:";

?>
