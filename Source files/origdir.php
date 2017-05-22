<?php
error_reporting(0);
if ($_POST[orgn1]=="") {
	header("Location: originaldirectory.html");
	exit;
}

$dir_name = $_POST[orgn1];
$dir = @opendir($dir_name);
$file_list="<ul>";
$file_list.="\r\n";
while ($file_name = @readdir($dir)) {
	if (($file_name!=".")&&($file_name!="..")) {
		
$file_list .= "<li>$file_name";
$file_list .= "\r\n";

	}
	
}
$file_list .="</ul>";
@closedir($dir);
?> 
 

<html>
<head>
<link rel="stylesheet" type="text/css" href="dir.css">
	<title>Directory Listing</title>
</head>
<body>

<p style="font-size:50px;font-weight:bold">Folders in <?php echo "$dir_name";?></p>
<span><?php echo "$file_list";?></span>


</body>
</html>

<?php
$filename = "f:/XAMPP/htdocs/PROJECT FILESYNC/orgdircontents.txt";

$newfile = fopen($filename, "w+")or die("Couldn't Create File.");
fwrite($newfile, $file_list) or die("Couldn't write to file.");
fclose($newfile);
?>


