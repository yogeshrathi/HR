<?php
require_once 'conn.php';
session_start();

if(!(isset($_SESSION['user'])))
{
	header("refresh:00;url=login.php");
}
	
	$id = $_SESSION['user'];

if(isset($_POST['submit']))
{


//connection establishment


//getting form data
$quali=$_POST['quali'];
$exp=$_POST['exp'];
$post=$_POST['post'];
$salary=$_POST['salary'];
$adrno=$_POST['adrno'];
$jdate=$_POST['jdate'];
$panno=$_POST['panno'];
$accno=$_POST['accno'];
$eleno=$_POST['eleno'];
$ifsc=$_POST['ifsc'];
$bankloc=$_POST['bankloc'];
$acctype=$_POST['acctype'];
$eqp=$_POST['eqp'];




$sql ="UPDATE `faculty_t` SET `qualification`= '".$quali."',`experience`= '".$exp."',`POST`= '".$post."',`SALARY`= '".$salary."',`ADHAR_NO`= '".$adrno."',`JOIN_DATE`= '".$jdate."',`PANCARD_NO`= '".$panno."',`BANK_ACC_NO`= '".$accno."',`ELECTIONCARD_NO`= '".$eleno."',`IFSC_CODE`= '".$ifsc."',`BANK_LOC`= '".$bankloc."',`ACC_TYPE`= '".$acctype."',`allocated_equi`= '".$eqp."' WHERE ID = '".$id."'";
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



}

?>f