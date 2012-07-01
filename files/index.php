<?php
require_once('pre.php');
Output::set_title("File Manager");
Output::add_stylesheet(SITE_LINK_REL."css/jqueryFileTree.css");
Output::add_script(SITE_LINK_REL."js/jqueryFileTree.js");

echo("<script>
	$(function () {
    	$('#file-tree').fileTree({ root: '1', folderEvent: 'click', loadMessage: 'Loading file tree...' }, function(id,type) {
        	$('#detail-pane').html('<div style=\"width: 16px; margin: 20px auto;\"><img src=\"".SITE_LINK_REL."images/ajax-loader.gif\" /></div>');
        	$('#detail-pane').load('".SITE_LINK_REL."ajax/file-folder-detail.php?type='+type+'&id='+id);
    	});
	});
</script>");

MainTemplate::set_subtitle("Browse and upload files to the system");

?>
<div class="row">
	<div class="span6" id="detail-pane" style="margin-right: -11px;">
		<h3>Select a file from the right.</h3>
		<p>When a file is selected its properties and options will be displayed here.</p>
		<p>File types:</p>
		<ul class="jqueryFileTree">
			<li class="file ext_music">Music</li>
			<li class="file ext_jingle">Jingle / Advert</li>
			<li class="file ext_aw_set">Audiowall Set</li>
			<li class="file ext_script">Script</li>
			<li class="file ext_showplan">Showplan</li>
		</ul>
	</div>
	<div class="span6" style="height: 560px; overflow: auto; border-left: 1px solid #eee; padding-left: 10px; ">
		<div id="file-tree">
			<img src="<?php echo SITE_LINK_REL; ?>images/ajax-loader.gif" />
		</div>
	</div>
</div>