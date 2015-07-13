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
$data=$_POST['RunData'];
$age=(int)$_POST[Age];
if((string)$_POST[Gender]==null) $gender='NULL';
elseif ((string)$_POST[Gender]=='False') $gender=0;
else $gender=1;

$grade=$_POST[Grade];
settype($grade,"float");
$weight=$_POST[Weight];
settype($weight,"float");
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE User='$myusername' and Password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
  $addString="UPDATE  $tbl_name SET  RunData = '$data', Age=$age, Gender=$gender, Grade=$grade, Weight=$weight WHERE User='$myusername' ";
  
  mysql_query($addString);
  
  echo "<JustRunServerResult>OK</JustRunServerResult>";
  

  echo "<JustRunServerResponse>Successfully updated your run data!";
  echo "</JustRunServerResponse>";
}
else echo "<JustRunServerResult>Fail</JustRunServerResult>";

?>