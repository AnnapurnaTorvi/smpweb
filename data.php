<?php
$name =$_POST['name'];
$number =$_POST['number'];
$email =$_POST['email'];
$message =$_POST['message'];

//database connection 
$conn= new mysqli('localhost','root','','','testsmp');
if($conn->data_error){
    die('connection failed:'.$conn->data_error);}
    else{
        $stmt=$conn->prepare("insert into in(name,number,email,message) value(?,?,?,?)");
        $stmt->bind_param("siss",$name,$number,$email,$message)
        $stmt->execute();
        echo "Thank you. we will surly connect you soon";
        $stmt->close();
        $conn->close();

    }
}
?>