<?php
include "server/database.php";

$id = $_GET['var'];
$sql = "DELETE FROM sigma WHERE ID = $id";

if($db->query($sql)) {
    header('location: tabeladmin.php');
}
else{
    echo "g msk";
}
?>