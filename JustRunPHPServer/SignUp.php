<?php

$host="mysql12.000webhost.com"; // Host name 
$username="a6449496_bvv"; // Mysql username 
$password="dungeoniege28"; // My23sql password 
$db_name="a6449496_JustRun"; // Database name 
$tbl_name="Account"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
//
// username and password sent from form 
$myusername=$_POST['User']; 
$mypassword=$_POST['Password']; 
$email=$_POST['Email'];
if(strlen($myusername)<4 || strlen($mypassword)<4){
    echo "<JustRunServerResult>Fail</JustRunServerResult>";
    echo "<JustRunServerResponse>Username or Password must be at least 4 characters!</JustRunServerResponse>";
    exit;
}
$sql="SELECT * FROM $tbl_name WHERE User='$myusername'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
if($count!=0){
    echo "<JustRunServerResult>Fail</JustRunServerResult>";
    echo "<JustRunServerResponse>This username already exists!</JustRunServerResponse>";
    return;
}
else
{
    
    $addString="Insert into $tbl_name (user,password,email) values ('$myusername','$mypassword','$email')";
    mysql_query($addString);
  

  echo "<JustRunServerResponse>Your account has been created successfully and is ready to use!</JustRunServerResponse>";
  echo "<JustRunServerResult>OK</JustRunServerResult>";
  
    
}
?>