<?php
    if(isset($_FILES['file']))
    {
       $conn = new mysqli("localhost","root","","cms");
       $name = $_POST['name'];
       
       
           $file= $_FILES['file'];
           $errors= array();
           $file_name = $_FILES['file']['name'];
           $file_size =$_FILES['file']['size'];
           $file_tmp =$_FILES['file']['tmp_name'];
           $file_type=$_FILES['file']['type'];
      
        if(move_uploaded_file($file_tmp,"uploads/".$file_name)){
         $sql = "INSERT INTO `resume`(`name`,`file_name`) values ('$name','$file_name');";
         $conn->query($sql);
         echo "Success";
         header("refresh:00;url=resume_upload.php");
        
      }
      else
      {
         print_r($errors);
      }
    }
   else
   {
      echo "no";
   }
?>
