<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM services WHERE service_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>