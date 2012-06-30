<?php
require_once('pre.php');
Output::set_template();

$dir = FilesFolders::get_by_id($_REQUEST['dir']);

$children = $dir->get_children();

echo("<ul class=\"jqueryFileTree\" style=\"display: none\">");

foreach($children as $child) {
	switch($child->get_itemtype()) {
		case "dir":
			echo("<li class=\"directory collapsed\"><a href=\"#\" rel=\"".$child->get_id()."\">".$child->get_name()."</a></li>");
			break;
		default:
			echo("<li class=\"file ext_".$child->get_itemtype()."\"><a href=\"#\" rel=\"".$child->get_id()."\">".$child->get_name()."</a></li>");
			break;
		}
}

echo("</ul>");

/*if( file_exists($root . $_POST['dir']) ) {
	$files = scandir($root . $_POST['dir']);
	natcasesort($files);
	if( count($files) > 2 ) { /* The 2 accounts for . and .. 
		echo "<ul class=\"jqueryFileTree\" style=\"display: none;\">";
		// All dirs

		foreach( $files as $file ) {
			if( file_exists($root . $_POST['dir'] . $file) && $file != '.' && $file != '..' && is_dir($root . $_POST['dir'] . $file) ) {
				echo "<li class=\"directory collapsed\"><a href=\"#\" rel=\"" . htmlentities($_POST['dir'] . $file) . "/\">" . htmlentities($file) . "</a></li>";
			}
		}
		// All files
		foreach( $files as $file ) {
			if( file_exists($root . $_POST['dir'] . $file) && $file != '.' && $file != '..' && !is_dir($root . $_POST['dir'] . $file) ) {
				$ext = preg_replace('/^.*\./', '', $file);
				echo "<li class=\"file ext_$ext\"><a href=\"#\" rel=\"" . htmlentities($_POST['dir'] . $file) . "\">" . htmlentities($file) . "</a></li>";
			}
		}
		echo "</ul>";	
	}
}*/

?>