<?php

$conn = mysqli_connect("127.0.0.1","root","111111","opentutorials");
$sql = "
INSERT INTO topic
  (title,description,created) VALUES(
    'MySRL','MYSRL is ...',NOW())";
echo $sql;
mysqli_query($conn,$sql);
echo mysqli_error($conn);
?>
