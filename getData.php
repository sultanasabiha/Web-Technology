<?php
// initializing variables
$servername = "DESKTOP-MIGVQ15\ECLIPSE";
$database    = "wt";
$uid = "";
$pass="";

$connection=[
  "Database"=>$database,
  "Uid"=> $uid,
  "PWD"=>$pass
];

$conn=sqlsrv_connect($servername,$connection);
if(!$conn){
  die(print_r(sqlsrv_error(),true));
}

if(isset($_POST['submit'])){
  $userid = $_POST['userid'];
  $passid = $_POST['passid'];
  $username = $_POST['username'];
  $address = $_POST['address'];
  $country = $_POST['country'];
  $zip = $_POST['zip'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $lang = $_POST['lang'];
  $desc = $_POST['desc'];

  $tsql = "INSERT INTO form (userid,pass,name,address,country,zipcode ,email,sex ,language ,about) values ('$userid', '$passid', '$username', '$address','$country','$zip','$email','$gender','$lang','$desc')";
  $stmt=sqlsrv_query($conn,$tsql);
if($stmt == false){
  echo "<p>Insertion Failed <br/></p>";
}
  else{
    echo "<br/><br/><span>Data Inserted successfully...!!</span>";
 
  }
sqlsrv_close($conn);
}
?>
