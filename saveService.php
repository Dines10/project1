<?php
session_start();
include('../connect.php');
$a = $_POST['name'];
$b = $_POST['cperson'];
$c = $_POST['address'];
$d = $_POST['contact'];
$e = $_POST['note'];
// query
$sql = "INSERT INTO services (service_M_name,contact_person,cust_address,cust_contact,note) VALUES (:a,:b,:c,:d,:e)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e));
header("location: service.php");


?>