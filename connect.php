<?php

$dbname="tinywheels";
$conn=mysqli_connect("localhost","root","",$dbname);

// Check connection
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}


function select_data($sql)
{

  global $conn;
  $res = mysqli_query($conn, $sql);
  if ($res)
    return $res;
  else
    return False;
}

function insert_data($sql)
{
  
  global $conn;
  $res = mysqli_query($conn, $sql);
  if ($res)
    return True;
  else
    return False;
}

function update_data($sql)
{
  
  global $conn;
  $res = mysqli_query($conn, $sql);
  if ($res)
    return True;
  else
    return False;
}

function count_data($sql)
{
  global $conn;
  $res = mysqli_query($conn, $sql);
  if ($res)
    return mysqli_num_rows($res);
  else
    return False;
}

function num($sql)
{
   global $conn;
   $result = mysqli_query($conn, $sql);
   if ($result) {
      $numrow = mysqli_num_rows($result);
      return $numrow;
   } else {
      return false;
   }
}

function send_mail($email, $title, $body) {
  if (mail($email, $title, $body, "From: Garage4<teamgarage4web@gmail.com>\r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=UISO-8859-1\r\n"))
      return 1;
  else
      return 0;
}

?>


