<?php
class VirtualDirectories {
	
	public function get($id) {
		return self::get_by_id($id);
	}

	public function get_by_id($id) {
		$result = DigiplayDB::query("SELECT * FROM dir WHERE id = ".$id);
		if(pg_num_rows($result)) {
			return pg_fetch_object($result,NULL,"VirtualDirectory");
		} else return false;
	}

	public function get_by_parent($id) {
		$directories = array();
		$result = DigiplayDB::query("SELECT * FROM dir WHERE parent = ".$id);
		while($object = pg_fetch_object($result,NULL,"VirtualDirectory"))
                 $directories[] = $object;
    	return $directories;
	}
}
?>