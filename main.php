<?php
$conn = mysqli_connect('localhost','root','12345','test_db_vijay');
if(!$conn){
    echo "Connection Faild:". mysqli_connect_error();
}

if(isset($_POST['email'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $query = "SELECT * FROM `user` WHERE email='".$email."'";
    $result = mysqli_query($conn, $query);
    // echo $query;
    echo mysqli_num_rows($result);
}
?>