<?php include_once "db.php";

$classroom=$_GET['classroom']??'101';

$students=$Stu->all(['classroom'=>$classroom]);

header('Content-Type: application/json;');
echo json_encode($students);