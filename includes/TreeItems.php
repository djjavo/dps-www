<?php
class TreeItems {
	
	public function get($id) {
		return self::get_by_id($id);
	}

	public function get_by_id($id) {
		$result = DigiplayDB::query("SELECT * FROM v_tree WHERE userid = ".Session::get_id()." AND id = ".$id);
		if(pg_num_rows($result)) {
			return pg_fetch_object($result,NULL,"TreeItem");
		} else return false;
	}

	public function get_by_parent($id) {
		$children = array();
		$result = DigiplayDB::query("SELECT * FROM v_tree WHERE userid = ".Session::get_id()." AND parent = ".$id);
		while($object = pg_fetch_object($result,NULL,"TreeItem"))
                 $children[] = $object;
    	return $children;
	}
}
?>