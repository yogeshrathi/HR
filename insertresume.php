<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cms";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['submit'])){ 
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$website = $_POST['website'];
$sw_know = $_POST['sw_know'];
$objective = $_POST['objective'];
$experience = $_POST['experience'];
$designation = $_POST['designation'];
$achievements = $_POST['achievements'];
$qualification= $_POST['qualification'];
$language_known = $_POST['language_known'];

$sql = "INSERT INTO faculty_t(fname, mname, lname, email, contact, designation, website, objective, qualification, experience, language_known, sw_know, achievements) VALUES ('$fname', '$mname', '$lname', '$email', '$contact', '$designation', '$website', '$objective', '$qualification', '$experience', '$language_known', '$sw_know', '$achievements')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

mysqli_close($conn);
header("refresh:1; url=forms.php")
?>