<?php
$arrInfo = $_FILES['Filedata'];
$tmpName = $arrInfo['tmp_name'];
$realName = $arrInfo['name'];
$ext = explode(".",$realName)[1];
$baseName = md5(uniqid()).".$ext";
$basenDir = Date("Y/m/d/",time());
if (!is_dir($basenDir)){
    mkdir($basenDir,0,777);
}
$filePath = $basenDir.$baseName;
move_uploaded_file($tmpName,$filePath);

echo $filePath;