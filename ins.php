<?php
$con=mysqli_connect("localhost","root","","10april");
$n= $_POST['sname'];
$r= $_POST['sroll'];
$s= $_POST['stream'];
$sec= $_POST['sec'];

$buf=$_FILES['simg']['tmp_name'];
$fn=$_FILES['simg']['name'];
move_uploaded_file($buf,"s_image/".$fn);

$ins="INSERT INTO student SET s_name='$n',s_roll='$r', s_stream='$s',s_sec='$sec',s_img='$fn'";
if($con->query($ins)){
    header("location:sel.php");
}


?>