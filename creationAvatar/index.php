<?php
	function file_array($path, $recursive = false, $exclude = ".|..") {
		$path = rtrim($path, "/") . "/";
		$folder_handle = opendir($path);
		$exclude_array = explode("|", $exclude);
		$result = array();
		while(false !== ($filename = readdir($folder_handle))) {
		    if(!in_array(strtolower($filename), $exclude_array)) {
			if(is_dir($path . $filename . "/")) {
			    if($recursive) $result[$filename] = file_array($path . $filename . "/", true, $exclude);
			} else {
			    $result[] = $path . $filename;
			}
		    }
		}
		return $result;
	}
	$listeFichiers = file_array("images/avatar/", true);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title>Edition d'Avatar</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="css/index.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="css/humanity/jquery-ui.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/creationAvatar.js"></script>
	</head>
	<body>
		<div id="categories">
			<h3><a href="#">Corps</a></h3>
			<div>
			<?php
				foreach($listeFichiers["corps"] as $value) {
					echo "<img src=\"" . $value . "\" alt=\"" . $value . "\" class=\"corps\" />";
				}
			?>
			</div>
			<h3><a href="#">Yeux</a></h3>
			<div>
			<?php
				foreach($listeFichiers["yeux"] as $value) {
					echo "<img src=\"" . $value . "\" alt=\"" . $value . "\" class=\"yeux\" />";
				}
			?>
			</div>
			<h3><a href="#">Bouche</a></h3>
			<div>
			<?php
				foreach($listeFichiers["bouche"] as $value) {
					echo "<img src=\"" . $value . "\" alt=\"" . $value . "\" class=\"bouche\" />";
				}
			?>
			</div>
			<h3><a href="#">Cheveux</a></h3>
			<div>
			<?php
				foreach($listeFichiers["cheveux"] as $value) {
					echo "<img src=\"" . $value . "\" alt=\"" . $value . "\" class=\"cheveux\" />";
				}
			?>
			</div>
			<h3><a href="#">Vetements</a></h3>
			<div>
			<?php
				foreach($listeFichiers["vetements"] as $value) {
					echo "<img src=\"" . $value . "\" alt=\"" . $value . "\" class=\"vetements\" />";
				}
			?>
			</div>
			<h3><a href="#">Casque</a></h3>
			<div>
			<?php
				foreach($listeFichiers["casque"] as $value) {
					echo "<img src=\"" . $value . "\" alt=\"" . $value . "\" class=\"casque\" />";
				}
			?>
			</div>
			<h3><a href="#">Cape</a></h3>
			<div>
			<?php
				foreach($listeFichiers["cape"] as $value) {
					echo "<img src=\"" . $value . "\" alt=\"" . $value . "\" class=\"cape\" />";
				}
			?>
			</div>
		</div>
		<div id="visuel">
			<img src="images/pixel.png" alt="Pixel Transparent" id="cape" />
			<img src="images/pixel.png" alt="Pixel Transparent" id="corps" />
			<img src="images/pixel.png" alt="Pixel Transparent" id="vetements" />
			<img src="images/pixel.png" alt="Pixel Transparent" id="yeux" />
			<img src="images/pixel.png" alt="Pixel Transparent" id="bouche" />
			<img src="images/pixel.png" alt="Pixel Transparent" id="cheveux" />
			<img src="images/pixel.png" alt="Pixel Transparent" id="casque" />
		</div>
	</body>
</html>