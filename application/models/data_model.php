<?php

class Data_model extends CI_Model{
	// Old school way of doing thins. See below for Active Records :)
	// function getAll(){
	// 	$q = $this->db->query("SELECT * FROM data");
	// 	if($q->num_rows() > 0){
	// 		foreach($q->result() as $row){
	// 			$data[] = $row;
	// 		}
	// 		return $data;
	// 	}
	// }

	// Get all rows
	// function getAll(){
	// 	$q = $this->db->get('data');
	// 	if($q->num_rows > 0){
	// 		foreach ($q->result() as $row) {
	// 			$data[] = $row;
	// 		}
	// 		return $data;
	// 	}
	// }

	// Get selecte fields
	// function getAll(){
	// 	$this->db->select('title, contents');
	// 	$q = $this->db->get('data');
	// 	if($q->num_rows > 0){
	// 		foreach ($q->result() as $row) {
	// 			$data[] = $row;
	// 		}
	// 		return $data;
	// 	}
	// }

	// query binding
	// function getAll(){
	// 	$sql = "SELECT title, author, contents FROM data WHERE id = ? AND author = ?";
	// 	$q = $this->db->query($sql, array(4, 'Rich'));

	// 	if($q->num_rows > 0){
	// 		foreach ($q->result() as $row) {
	// 			$data[] = $row;
	// 		}
	// 		return $data;
	// 	}

	// }

	function getAll(){
		$this->db->select('id,  title, contents');
		$this->db->from('data');
		// $this->db->where('id', 4);

		$q = $this->db->get();

		if($q->num_rows > 0){
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function add_record($data){
		$this->db->insert('data', $data);
		return; 
	}

	function update_record($data){
		// just hard coded id for now
		$this->db->where('id', 2);
		$this->db->update('data', $data);
		return;
	}

	function delete_row(){
		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('data');
	}
}






