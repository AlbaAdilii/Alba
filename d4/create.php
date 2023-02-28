<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 7</title>
</head>
<body>
    

<?php 


$my_file=fopen("ds.txt","w+");
$my_text="Data changed ins second call";
fwrite($my_file,$my_text);

 echo"File has been created!<br>";
fclose($my_file);
    ?>
</body>
</html>

