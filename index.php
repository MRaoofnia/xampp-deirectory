<!DOCTYPE html>
<html>
<head>
	<title>Directories</title>
</head>
<body>
	<center>
	<?php
$dir = "../";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
    	if(strpos($file,'.')==0 && $file!='.' && $file!='..')
      echo  "<a href=../".$file.">".$file ."</a><br>";
    }
    closedir($dh);
  }
}
?>
</center>
</body>
</html>