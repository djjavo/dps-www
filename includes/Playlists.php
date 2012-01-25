<?php
class Playlists {
	public function get_all() {
		$playlists = array();
		$result = DigiplayDB::query("SELECT * FROM playlists ORDER BY sortorder ASC;");
		while($object = pg_fetch_object($result,NULL,"Playlist"))
                 $playlists[] = $object;
    	return $playlists;
	}
}
?>