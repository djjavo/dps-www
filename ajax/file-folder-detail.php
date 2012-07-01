<?php
require_once('pre.php');

$item = TreeItems::get_by_id($_REQUEST['id']);
$type = $_REQUEST['type'];

echo("<h3>".$item->get_name()."</h3>");
switch($type) {
	case 'dir':
		echo toolbar(array('add','upload','rename','move','delete'));
		break;
	case 'music':
		break;
	case 'jingle':
		break;
	case 'advert':
		break;
	case 'aw_set':
		break;
	case 'script':
		break;
	case 'showplan':
		break;
	default:
		echo('This file type was not recognised...what on earth are you trying to do?');
		break;
}

function toolbar($icons) {
	$glyphs = array(
		'add' => 'plus',
		'rename' => 'pencil',
		'move' => 'move',
		'delete' => 'trash',
		'upload' => 'upload'
		);
	$names = array(
		'add' => 'New Folder',
		'rename' => 'Rename',
		'move' => 'Move',
		'delete' => 'Delete',
		'upload' => 'Upload Here'
		);
	foreach($icons as $icon) {
		$return .= '<a class="btn" href="#'.$icon.'"><i class="icon-'.$glyphs[$icon].'" /> '.$names[$icon].'</a>';
	}
	return('<div class="btn-toolbar"><div class="btn-group">'.$return.'</div></div>');
}

?>