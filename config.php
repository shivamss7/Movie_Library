<?php

$conn = mysqli_connect("localhost", "root" , "" ,"films");
if(!$conn)
  die("Connection failed: " . mysqli_connect_error());

?>