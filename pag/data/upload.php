<?php
$myFile = $_FILES["data"]["tmp_name"];
$content = '';
$fh = fopen($myFile, 'r') or die("can't open file");
while (!feof($fh)) {
    $content .= fgets($fh);
}
fclose($fh);
 
$myFolder= $_POST["name"];
mkdir($myFolder);

$myFileName = $_FILES["data"]["name"];
$fh = fopen($myFolder . DIRECTORY_SEPARATOR . $myFileName, 'a') or die("can't open file");
$stringData = $content;
fwrite($fh, $stringData."\n");
fclose($fh);

$myFile = $_FILES["heatmap"]["tmp_name"];
$content = '';
$fh = fopen($myFile, 'r') or die("can't open file");
while (!feof($fh)) {
    $content .= fgets($fh);
}
fclose($fh);

$myFileName = $_FILES["heatmap"]["name"];
$fh = fopen($myFolder. DIRECTORY_SEPARATOR . $myFileName, 'a') or die("can't open file");
$stringData = $content;
fwrite($fh, $stringData."\n");
fclose($fh);

$myFile = $_FILES["level"]["tmp_name"];
$content = '';
$fh = fopen($myFile, 'r') or die("can't open file");
while (!feof($fh)) {
    $content .= fgets($fh);
}
fclose($fh);
 
$myFileName = $_FILES["level"]["name"];
$fh = fopen($myFolder. DIRECTORY_SEPARATOR . $myFileName, 'a') or die("can't open file");
$stringData = $content;
fwrite($fh, $stringData."\n");
fclose($fh);

$myFile = $_FILES["detailed"]["tmp_name"];
$content = '';
$fh = fopen($myFile, 'r') or die("can't open file");
while (!feof($fh)) {
    $content .= fgets($fh);
}
fclose($fh);
 
$myFileName = $_FILES["detailed"]["name"];
$fh = fopen($myFolder. DIRECTORY_SEPARATOR . $myFileName, 'a') or die("can't open file");
$stringData = $content;
fwrite($fh, $stringData."\n");
fclose($fh);


?>