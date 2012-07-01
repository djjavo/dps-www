<?php
require_once('pre.php');

$dir = TreeItems::get_by_id($_REQUEST['dir']);

$children = $dir->get_children();

echo("<ul class=\"jqueryFileTree\" style=\"display: none\">");

foreach($children as $child) {
	switch($child->get_itemtype()) {
		case "dir":
			echo("<li class=\"directory collapsed\"><a href=\"#\" data-dps-type=\"".$child->get_itemtype()."\" data-dps-id=\"".$child->get_id()."\">".$child->get_name()."</a></li>");
			break;
		default:
			echo("<li class=\"file ext_".$child->get_itemtype()."\"><a href=\"#\" data-dps-type=\"".$child->get_itemtype()."\" data-dps-id=\"".$child->get_id()."\">".$child->get_name()."</a></li>");
			break;
		}
}

echo("</ul>");
?>