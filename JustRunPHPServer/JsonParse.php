<?php

//  date_default_timezone_set('America/Los_Angeles');
//
// class Fruit implements JsonSerializable {
//     public
//         $type = 'Apple',
//         $lastEaten = null;
//   public function __construct() {
//         $this->lastEaten = new DateTime();
//     }
//
//     public function jsonSerialize() {
//         return [
//             'type' => $this->type,
//             'lastEaten' => $this->lastEaten->format(DateTime::ISO8601)
//         ];
//     }
//  }
// 
//echo json_encode(new Fruit()); //which outputs: {"type":"Apple","lastEaten":"2013-01-31T11:17:07-0500"}
//$_POST['Data']='[{"a":[1,2,3,4],"b":[5,3,6,8],"c":"5446","d":5},{"a":[1,2,3,4],"b":[5,3,6,8]}]';
//$data=json_decode($_POST['Data']);

//$res=json_enconde($date);
//date_default_timezone_set('UTC');
$host="mysql12.000webhost.com"; // Host name 
$username="a6449496_bvv"; // Mysql username 
$password="dungeoniege28"; // My23sql password 
$db_name="a6449496_JustRun"; // Database name 
$tbl_name="Account"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$a=$_POST[Date];
settype($a,"DateTime");
$sql="UPDATE  Account SET  Weight=10 WHERE User='test'";
$result=mysql_query($sql);
//$data="'$a'";
//$date = date('M j, Y',  $_POST['Data']);
//$data=json_decode('[{"a":1,"b":2,"c":3,"d":4,"e":5},{"a":[1,2,3,4]}]');
echo "<JustRunServerResponse>";
var_dump($a);
//var_dump('[{"a":1,"b":2,"c":3,"d":4,"e":5},{"a":[1,2,3,4]}]');
//var_dump($_POST['Data']);

//$timezone = new DateTimeZone('UTC');
//$dateTime = DateTime::createFromFormat('dmY|', '01011972', $timezone);
//$dateTime->format('Y-m-d 00:00:00');
//var_dump($dateTime);

echo "</JustRunServerResponse>";
?>