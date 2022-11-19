<?php
$conn=mysqli_connect('localhost','root','','registration');
if(isset($_POST['Submit'])){
    $firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email= $_POST['email'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$pasword1=$_POST['password1'];

$query="INSERT INTO users(firstname,lastname,email,gender,password1,password2)VALUES('$firstname','$lastname','$email','$gender','$password1','$password2')";
$result=mysqli_query($conn,$query);
if ($result){
    echo "<script>alert('You have successfully register')</script>";
}
else{
    echo "<script>alert('failed to register register')</script>";   
}
}