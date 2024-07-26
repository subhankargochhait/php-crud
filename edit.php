<?php
$con=mysqli_connect("localhost","root","","10april");

$id=$_GET['eid'];

$sel="SELECT * FROM student WHERE sid='$id'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="upd.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row['sid']; ?>"> 
        <p>STUDENT NAME :</p>
        <p><input type="text" name="sname" value="<?php echo $row['s_name']; ?>"></p>
        <p>STUDENT ROLL :</p>
        <P><input type="number" name="sroll" value="<?php echo $row['s_roll']; ?>"></P>
        <p>STREAM</p>
        <p>
            <select name="stream" id="">
                <option value="">-select-stream-</option>
                <option <?php if($row['s_stream']=="BCA") { echo "selected";} ?> value="BCA">BCA</option>
                <option <?php if($row['s_stream']=="BBA") { echo "selected";} ?> value="BBA">BBA</option>
                <option <?php if($row['s_stream']=="BHM") { echo "selected";} ?> value="BHM">BHM</option>
                <option <?php if($row['s_stream']=="BSC IN HHM") { echo "selected";} ?> value="BSC IN HHM">BSC IN HHM</option>
            </select>
        </p>
        <p>STUDENT SEC :</p>
        <p>
            <select name="sec" id="">
                <option  value="">-select-sec-</option>
                <option <?php if($row['s_sec']=="GROUP - A") { echo "selected";} ?> value="GROUP - A">GROUP - A</option>
                <option <?php if($row['s_sec']=="GROUP - B") { echo "selected";} ?> value="GROUP - B">GROUP - B</option>
            </select>
        </p>
        <p>STUDENT IMAGE :  </p>
        <p><input type="file" name="simg"></p>
        <p><img class="my" src="s_image/<?php echo $row['s_img'];  ?>" /></p>
        <p><input type="submit" name="save"></p>
    </form>
</body>
</html>