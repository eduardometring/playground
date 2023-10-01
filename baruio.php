<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./reset.css">
    
</head>
<body>
<?php
$path = "/testweb/home.php";

//Show filename
echo basename($path) ."<br/>";

//Show filename, but cut off file extension for ".php" files
echo basename($path,".php");
?>
    <script src="/js/som.js"></script>
</body>
</html>