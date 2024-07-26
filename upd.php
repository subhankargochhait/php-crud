<?php
$con=mysqli_connect("localhost","root","","10april");
$id=$_POST['id'];

$n= $_POST['sname'];
$r= $_POST['sroll'];
$s= $_POST['stream'];
$sec= $_POST['sec'];


if(isset($_FILES['simg']['tmp_name']) && $_FILES['simg']['tmp_name']!=""){
$buf=$_FILES['simg']['tmp_name'];
$fn=$_FILES['simg']['name'];
move_uploaded_file($buf,"s_image/".$fn);

$up="UPDATE student SET s_name='$n',s_roll='$r', s_stream='$s',s_sec='$sec',s_img='$fn' WHERE sid='$id'";

}else{
    $up="UPDATE student SET s_name='$n',s_roll='$r', s_stream='$s',s_sec='$sec' WHERE sid='$id'";

}
if($con->query($up)){
    header("location:sel.php");
}

?>