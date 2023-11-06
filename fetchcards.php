<?php

$sql = ("SELECT * FROM `information` ORDER BY `information`.`date` DESC");
$stmt = $db->prepare($sql);
$stmt->execute();
$cards = $stmt->fetchAll();

?>