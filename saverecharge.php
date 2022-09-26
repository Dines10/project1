<?php
session_start();
include('../connect.php');
$a = $_POST['mobile'];
$b = $_POST['rtype'];
$c = $_POST['operator'];
$d = $_POST['circle'];
$e = $_POST['amount'];

date_default_timezone_set('Asia/Kolkata'); 
$f= date("Y-m-d H:i:s"); // time in India
// query







$sql = "INSERT INTO recharge (mobile,rtype,operator,circle,amount,rdate) VALUES (:a,:b,:c,:d,:e,:f)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f));
header("location: recharge.php");


?>