<?php
$id = $_GET['id'];
$sql = ("SELECT * FROM information WHERE id=$id");
$stmt = $db->prepare($sql);
$stmt->execute();
$currentInformation = $stmt->fetchAll();

?>
