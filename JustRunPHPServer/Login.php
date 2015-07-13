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

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE User='$myusername' and Password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count!=0){
  
  
echo "<JustRunServerResult>OK</JustRunServerResult>";
  echo "<JustRunServerResponse>OK</JustRunServerResponse>";
}
else{ echo "<JustRunServerResponse>Wrong username or password. Please try again.</JustRunServerResponse>";
echo "<JustRunServerResult>Fail</JustRunServerResult>";
}


?>