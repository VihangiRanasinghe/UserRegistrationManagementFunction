<?php
include_once 'connect.php';
?>

<?php


$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$telephone = $_POST["email"];
$email = $_POST["mobilenumber"];
$password = $_POST["password"];
$Cpassword = $_POST[" confirmationpassword"];
$Country = $_POST["country"];


$sql="INSERT INTO registration(
   
   First_Name,  
   Last_Name,
   Email,
   Mobile,
   Password,
   Confirm_Password,
   Country
    )
    VALUES(
     '$fname',
     '$lname',
     '$telephone',
     '$email',
     '$password',
     '$Cpassword',
     '$Country'
)";

if(mysqli_query($conn,$sql)){
    // echo"<script>alert('Record Inserted Successfully')</script>";
     //header("location:contact.php");
}
else{
     echo"<script>alert('Error occured when inserting data.please try again')</script>";
}

mysqli_close($conn);

?>