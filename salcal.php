<?php
require_once 'conn.php';
session_start();

$id = $_SESSION['user'];
									



$sql="SELECT  * FROM `salary` ";
$res = mysqli_query($conn,$sql);
$sum = 0;

										while ($row=$res->fetch_assoc()) 
										{     

												$sum=$sum+$row['sal_rec'];

											
									 
								}
								 
								 
								 
echo $sum;






?>