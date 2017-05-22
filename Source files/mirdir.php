<?php
error_reporting(0);
if(($_POST[orgn2])=="") {
		header("Location: mirrordirectory.html");
	exit;
}

$dir_name = $_POST[orgn2];
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
<p style="font-size:50px; font-weight:bold;">Folders in <?php echo "$dir_name";?></p>
<span><?php echo "$file_list";?></span>
              

</body>
</html>


<?php
$filenamemir = "f:/XAMPP/htdocs/PROJECT FILESYNC/mirdircontents.txt";
$newfilemir = fopen($filenamemir, "w+")or die("Couldn't Create File.");
fwrite($newfilemir, $file_list) or die("Couldn't write to file.");
fclose($newfilemir);
?>
