<?php
// mysqli_connect() function opens a new connection to the MySQL server.
require 'connection.php';
//$conn = Connect();

session_start();// Starting Session

// Storing Session
//$user_check=$_SESSION['fname'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT fname FROM CUSTOMER WHERE fname = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$count=mysqli_num_rows($ses_sql);
if($count>0){
    $row=mysqli_fetch_assoc($count);
    
$_SESSION['usertype']=$row;
$_SESSION['IS LOGIN']='YES';

//$login_session =$row['fname'];

}

?>