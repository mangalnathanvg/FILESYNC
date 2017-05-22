<?php 
error_reporting(0);
$newfilename1 = "f:/XAMPP/htdocs/PROJECT FILESYNC/orgdircontents.txt";
$newfilename2 = "f:/XAMPP/htdocs/PROJECT FILESYNC/mirdircontents.txt";
$newfile1 = fopen($newfilename1, "r");
$newfile2 = fopen($newfilename2,"r");

 
while (!feof($newfile1)) {
	$flag=0;
	
	$orgcon = fgets($newfile1);
	fseek($newfile2,0);
	while(!feof($newfile2))
	{
		$mircon = fgets($newfile2);
		    if (strcmp($orgcon, $mircon)==0) 
		    {
			    $flag=1;
			    break;
		    }
	}
	if($flag==0){
		$orgnotinmir.="$orgcon";
	}
}


fclose($newfile1);
fclose($newfile2);
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dir.css">
	<title></title>
</head>
<body>
<span><?php
echo "$orgnotinmir";
?></span>
</body>
</html>
