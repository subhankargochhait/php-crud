<?php
$con=mysqli_connect("localhost","root","","10april");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <br>
<a href="index.php" class="btn btn-info">Add New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">sid</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Roll</th>
      <th scope="col">Student Stream</th>
      <th scope="col">Student Sec</th>
      <th scope="col">Student Images</th>
      <th scope="col">DELETE</th>
      <th scope="col">UPDATE</th>
    </tr>
  </thead>
  <tbody>
   <?php

   $sel="SELECT * FROM student";
   $rs=$con->query($sel);
   while($row=$rs->fetch_assoc()){ ?>

    <tr>
    <td><?php echo $row['sid'] ?></td>
    <td><?php echo $row['s_name'] ?></td>
    <td><?php echo $row['s_roll'] ?></td>
    <td><?php echo $row['s_stream'] ?></td>
    <td><?php echo $row['s_sec'] ?></td>
    <td><img class="my" src="s_image/<?php echo $row['s_img'];  ?>" /></td>
    <td><a Onclick="return confirm('Are you sure ?')"; href="del.php?did=<?php echo $row['sid'] ?>" class="btn btn-danger">Delete</a></td>
    <td><a href="edit.php?eid=<?php echo $row['sid'] ?>" class="btn btn-success">Edit</a></td>
    </tr>

<?php
   } ?>
  </tbody>
</table>
</div>
</body>
</html>