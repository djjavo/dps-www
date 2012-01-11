<?php
class VirtualDirectory {
	private $id;
	private $parent;
	private $name;
	private $notes;
	private $inherit;

	public function get_id() { return $this->id; }
	public function get_parent() { return $this->parent; }
	public function get_name() { return $this->name; }
	public function get_notes() { return $this->notes; }
	public function is_inherit() { return (($this->inherit == "t")? TRUE : FALSE); }

	public function get_child_folders() { return VirtualDirectories::get_by_parent($this->id); }

	public function get_files() { return VirtualDirectories::get_files_by_parent($this->id); }
}
?>