<?php
require_once 'conn.php'; 
if(isset($_POST['submit']))
{

 session_start();
 $_SESSION['user']=$_POST['user'];
if(!(isset($_SESSION['user'])))
{
    header("refresh:00;url=sign-up.html");
}
    
$id = $_SESSION['user'];
$user= $_POST['user'];
$pass=$_POST['pass'];
$sql = "SELECT password FROM faculty_t WHERE ID='$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0 && $result->num_rows < 2)
{
    // output data of each row
    while($row = $result->fetch_assoc())
     {
        //echo $row;
        if ($pass==$row["password"])
         {
        	echo "login successfully";
            echo $_SESSION['user'];
            header("refresh:00;url=forms.php");

        }
         else
        {
    	echo "login failed";
            header("refresh:100;url=login.html");

        }
	}
} 
else 
{
    echo "0 results";
}
 }
$conn->close();
?>

