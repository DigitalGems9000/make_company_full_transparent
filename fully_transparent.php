<?php

function transparency() {
	$path = __FILE__;
	$content = @file_get_contents($path);
	
	echo '<div style="display:none">'.json_encode([
	'filename' => basename($path),
	'path' => $path,
	'content' => $content
	]).'</div>';
	
}

transparency();
	
?>
