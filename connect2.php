<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','addi');
// get the post records
$txtName = $_POST['txtName'];

$cnic = $_POST['cnic'];
$contact = $_POST['contact'];
$Qualifiction = $_POST['Qualifiction'];
$referby = $_POST['referby'];
$city = $_POST['city'];
// database insert SQL code
$sql = "INSERT INTO `regestration_form` (`Id`, `fldName`, `fldcnic`, `fldcontact`, `fldQualifiction` ,`fldreferby` , `fldcity`) VALUES ('0', '$txtName', '$cnic', '$contact' , '$Qualifiction' , '$referby' ,'$city')";
// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
    echo "regestration successfull";
}
?>