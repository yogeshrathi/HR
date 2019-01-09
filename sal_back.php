<?php
require_once 'connect.php';
$name = $_POST["name"];
$sal = $_POST["sal_amt"];
$salrec = $_POST["sal_rec"];
$ded = $_POST["ded"];
$month = $_POST["month"];
$date = $_POST["date"];





$sql1= "INSERT INTO salary (`name`, `sal_amt`, `sal_rec`, `ded`, `month`, `date`) VALUES('$name','$sal','$salrec','$ded','$month','$date')";
     


$res = mysqli_query($conn,$sql1);

if($res)
{
	echo "<center>Update Sucessfull</center>";
	header("refresh:01;url=sal_form.php");
}
else
{
	echo "Update unsuccessful";
	header("refresh:01;url=sal_form.php");

}

     ?>