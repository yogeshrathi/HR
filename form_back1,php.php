<?php
require_once 'conn.php';
/**session_start();

if(!(isset($_SESSION['user'])))
{
	header("refresh:00;url=login.php");
}
	*/



//connection establishment


//getting form data
$id=$_POST['id'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$bloodgrp=$_POST['bloodgrp'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$curadd=$_POST['curadd'];
$peradd=$_POST['peradd'];
$birthplc=$_POST['birthplc'];
$dob=$_POST['dob'];
$hometown=$_POST['hometown'];




$sql ="UPDATE `faculty_t` SET `ID`= '".$id."',`fname`= '".$fname."',`mname`= '".$mname."',`lname`= '".$lname."',`BLOOD_GRP`= '".$bloodgrp."',`contact`= '".$contact."',`email`= '".$email."',`current_add`= '".$curadd."',`PERMANENT_ADD`= '".$peradd."',`BIRTHPLACE`= '".$birthplc."',`dob`= '".$dob."',`HOMETOWN`= '".$hometown."' WHERE ID = '".$id."'";
$res = mysqli_query($conn,$sql);

if($res)
{
	echo "<center>Update Sucessfull</center>";
	header("refresh:01;url=forms.php");
}
else
{
	echo "Update unsuccessful";
	header("refresh:01;url=forms.php");

}





?>