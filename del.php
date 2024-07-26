<?php
$con=mysqli_connect("localhost","root","","10april");

$id=$_GET['did'];

$sel="SELECT * FROM student WHERE sid='$id'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();

unlink("s_image/".$row['s_img']);

$d="DELETE FROM student WHERE sid='$id'";
if($con->query($d)){
    header("location:sel.php");
}

?>