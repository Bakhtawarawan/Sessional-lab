<?php
   
    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "web_technologies";


    $username=$_POST['username'];
    $fathername=$_POST['fathername'];
    $email=$_POST['email'];
    $MobileNo=$_POST['MobileNo'];

    // Create Connection
    $conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);

    $query="INSERT INTO studentInfo(username,fathername,email,MobileNo) VALUES ('$username','$fathername','$email','$MobileNo')";

    $run= mysqli_query($conn,$query);
    if($run==TRUE)
    echo"Data insert Successfull";

?>