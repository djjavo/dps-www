<?php
class FilesFolders {
	
	public function get($id) {
		return self::get_by_id($id);
	}

	public function get_by_id($id) {
		$result = DigiplayDB::query("SELECT * FROM v_tree WHERE userid = ".Session::get_id()." AND id = ".$id);
		if(pg_num_rows($result)) {
			return pg_fetch_object($result,NULL,"FileFolder");
		} else return false;
	}

	public function get_by_parent($id) {
		$directories = array();
		$result = DigiplayDB::query("SELECT * FROM v_tree WHERE userid = ".Session::get_id()." AND parent = ".$id);
		while($object = pg_fetch_object($result,NULL,"FileFolder"))
                 $children[] = $object;
    	return $children;
	}
}
?>