<?php
$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
// to connect database
 $conn= new mysqli('localhost','root','',libraryproject);
 if ($conn->connect_error){
    die('connection failed : ' . $conn->connect_error);
 }else{
    $stmt = $conn->prepare("insert into process_signup (name, email, password) value(?,?,?) ");
    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();
    echo "registration successfuly....";
    $stmt->close();
    $conn->close(); 
 }
?>