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

$my_filename="ds.txt";
$my_file=fopen($my_filename,'r');
$my_size=filesize($my_filename);
$my_filedata=fread($my_file,$my_size);
fclose($my_file);
echo "File data: <br>";
echo $my_filedata;


$handle=fopen('ds.txt','a+');
fwrite($handle,"\n Add more lines to the file");
fclose($handle);
echo"<br>"; 

$my_filename="ds.txt";
$my_file=fopen($my_filename,'r');
$my_size=filesize($my_filename);
$my_filedata2=fread($my_file,$my_size);
fclose($my_file);
echo "File data: <br>";
echo $my_filedata2;


echo "<br><h2>Read line by line</h2>";
$my_file=fopen("ds.txt","r") or die ("Unable to open file!");
echo fgets($my_file); echo "<br>";
echo fgets($my_file);
fclose($my_file);

echo"<br><h2>Get full text</h2>";
$my_file =fopen("ds.txt","r") or die ("Unable to open file!");

while(!feof($my_file)){
    echo fgets($my_file)."<br>";
}
fclose($my_file);



?>
</body>
</html>