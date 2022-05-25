<?php
include "upload.php";

define("LOCALHOST","localhost/test");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>File Manager</h1>
    <?php
    ?>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    File: <input type="file" name="file"/>&nbsp;&nbsp;
    Folder: <input type="text" name="folder">&nbsp;&nbsp;
    <button type="submit" name="submit">Submit</button>
    </form>

</body>
</html>