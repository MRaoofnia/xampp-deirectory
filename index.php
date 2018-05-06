<!DOCTYPE html>
<html>
<head>
	<title>Directories</title>
</head>

<style type="text/css">
	p{
		max-width: 40%;
		background-color: cyan;
		border-color: blue;
		border-style: solid;
		border-bottom-color: black;
		border-bottom-style: solid;	
		padding: 8px;
		margin:0;
	}

	br{
		margin:0;
		padding:0;
		height: 0;
	}

	body{
		padding-top: 10%;
	}
</style>

<body>
	<center>
	<?php
$dir = "../";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
    	if(strpos($file,'.')==0 && $file!='.' && $file!='..')
      echo  "<p><a href=../".$file.">".$file ."</a></p>";
    }
    closedir($dh);
  }
}
?>
</center>
</body>
</html>