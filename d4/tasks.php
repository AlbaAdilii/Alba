<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
     $file=fopen('tasks.txt','r');

     $header=fgetcsv($file, 0, "\t");

     echo implode("\t", $header) ."\n";
     while(($row=fgetcsv($file,0,"\t"))!==false){
        echo implode("\t",$row)."\n";
     }
     fclose($file);
?>
</body>
</html>