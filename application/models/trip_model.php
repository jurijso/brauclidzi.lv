<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Trip_model extends CI_Model{

	function add_trip($trip){
		$trip["trip_date"]=substr($trip["trip_date"], 6, 4)."-".substr($trip["trip_date"], 3, 2)."-".substr($trip["trip_date"], 0, 2);
		echo $trip["trip_date"];
		$this->db->insert('trip', $trip); 

	}


}