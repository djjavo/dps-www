<?php
class FileFolder {
	private $id;
	private $parent;
	private $name;
	private $itemtype;
	private $username;
	private $permissions;

	public function get_id() { return $this->id; }
	public function get_parent() { return $this->parent; }
	public function get_name() { return $this->name; }
	public function get_itemtype() { return $this->itemtype; }
	public function get_username() { return $this->username; }
	public function get_permissions() { return $this->permissions; }

	public function get_children() { return FilesFolders::get_by_parent($this->id); }
}
?>