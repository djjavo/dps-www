<?php
require_once('pre.php');
Output::set_title("File Manager");
Output::add_stylesheet(SITE_LINK_REL."css/jqueryFileTree.css");
Output::add_script(SITE_LINK_REL."js/jqueryFileTree.js");

echo("<script>
	$(function () {
    	$('#file-tree').fileTree({ root: '1', folderEvent: 'click' }, function(file) {
        	alert(file);
    	});
	});
</script>");

MainTemplate::set_subtitle("Browse and upload files to the system");

echo("
<div class=\"row\">
	<div class=\"span6 pull-right\" style=\"height: 600px; overflow: auto; border-left: 1px solid #eee; padding-left: 10px; \">
		<div id=\"file-tree\">
		</div>
	</div>
</div>");


?>
