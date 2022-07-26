<?php

class User_model extends CI_model
{

	// Read data using username and password

	public function create($formArray)
	{

		$this->db->insert('student',$formArray);
	}

	public function all(){
		return $student = $this->db->get('student')->result_array();
	}
	public function getuser($id){
		$this->db->where('id',$id);
		return $student = $this->db->get('student')->row_array();
		

	}
	public function update($id,$formArray){
		$this->db->where('id',$id);
		$this->db->update('student',$formArray);

	}
	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('student');

	}
}
