<?php
$mysqli = new mysqli("localhost", "ensoul", "fuChong2014", "in2view");
if (mysqli_connect_errno()) {
        echo "Errore in connessione al DBMS: ".mysqli_connect_error();
        exit();
}
else {
    $brano = $_GET["brano"];
    $sql = "INSERT INTO in2view_voti (brano,num_voti) VALUES ('".$brano."',1) ON DUPLICATE KEY UPDATE num_voti=num_voti+1";
    if($mysqli->query($sql) === TRUE) {
        echo "TOOOMA";
    }
}
$mysqli->close();?>
