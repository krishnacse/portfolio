<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];

$conn = new mysqli_connect('localhost','root','','test');
if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into messages(name,email,subject,message) values(?,?,?,?)");
    $stmt->bind_param("ssss",$Name,$Email,$Subject,$Message);
    $stmt->execute();
    echo "Registration succussfully....!";
    $stmt->close();
    $conn->close();
}
?>