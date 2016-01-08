<?php

class Time extends CI_Model {
	public function get_time(){
		date_default_timezone_set('America/Los_Angeles');
		$timezone = date_default_timezone_get();
		return date('F j, Y, g:i a', time());
	}
}

?>


