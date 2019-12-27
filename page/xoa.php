<?php
    $id = $_GET['id'];
    $sql = "delete from hotels where id = $id";
    if($conn->exec($sql)) header("location: index.php");
    else echo "loi";
?>