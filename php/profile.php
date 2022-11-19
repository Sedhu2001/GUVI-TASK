<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email= $_POST['email'];
$gender=$_POST['gender'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$conn=new mysqli('localhost','root','sedhu@2001','guvi');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt=$connect->prepare("insert into registration(firstname,lastname,email,gender,password1,password2)values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$firstname,$lastname,$email,$gender,$password1,$password2);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}
?>