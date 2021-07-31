<?php 
 
class Staff_Model extends CI_Model{

	function get_profile($id) {
        $query = $this->db->select('*')
        ->from('user')
        ->join('role','role.role_id = user.role_id')
        ->where('user.id', $id)
        ->get();

		return $query->result();
	}

}