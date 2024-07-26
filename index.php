<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>CRUD OPERATION</h1>
    <form action="ins.php" method="POST" enctype="multipart/form-data">
        <p>STUDENT NAME :</p>
        <p><input type="text" name="sname"></p>
        <p>STUDENT ROLL :</p>
        <P><input type="number" name="sroll"></P>
        <p>STREAM</p>
        <p>
            <select name="stream" id="">
                <option value="">-select-stream-</option>
                <option value="BCA">BCA</option>
                <option value="BBA">BBA</option>
                <option value="BHM">BHM</option>
                <option value="BSC IN HHM">BSC IN HHM</option>
            </select>
        </p>
        <p>STUDENT SEC :</p>
        <p>
            <select name="sec" id="">
                <option value="">-select-sec-</option>
                <option value="GROUP - A">GROUP - A</option>
                <option value="GROUP - B">GROUP - B</option>
            </select>
        </p>
        <p>STUDENT IMAGE :  </p>
        <p><input type="file" name="simg"></p>
        <p><input type="submit" name="save"></p>
    </form>
</div>
</body>
</html>