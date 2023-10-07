<?php

$t1 = $_POST['Fristname'];
$t3 = $_POST['Lastname'];
$t4 = $_POST['Designation'];
$t5 = $_POST['Qualification'];

$con = mysqli_connect("localhost", 'root', '', 'cbitdb', '4306');
mysqli_select_db($con, "cbitdb");
if (mysqli_query($con, "insert into table3 values('$t1','','$t3','$t4','$t5')")) {
  echo "<script>alert('Your record sucessfully completed & Thank you')</script>";
  echo '<meta http-equiv="refresh" content="1; URL=cbitstaff.php"/>';
} else {
  echo "<script>alert('Your record not completed and Try again')</script>";
  echo '<meta http-equiv="refresh" content="1; URL=cbitstaff.php"/>';
}
?>