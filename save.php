<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "icfia university data";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(!$conn)

{
echo "not connected";

}

//start

$name = $_POST['name'];
$department = $_POST['department'];
$event = $_POST['event'];
$idno = $_POST['idno'];

$sql = "INSERT INTO `test`(`name`, `department`, `event`, `id no`) VALUES ('$name','$department','$event','$idno')";

$result = mysqli_query($conn , $sql);

if($result)
{
	echo "data submited";
}

else
{
	echo "submittion failed";
}

?>