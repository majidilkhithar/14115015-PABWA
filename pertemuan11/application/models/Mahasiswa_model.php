<?php
class Mahasiswa_model extends CI_model{

	public function getAllMahasiswa()
	{
		$query = $this->db->get("user");
		return $query->result_array();
	}
	public function tambahData(){
		$data=[
			"nama"=> $this->input->post('nama',true),
			"nim"=> $this->input->post('nim',true),
			"email"=> $this->input->post('email',true),
			"jurusan"=> $this->input->post('jurusan')
		];

		$this->db->insert('user',$data);
	}

	public function hapusData($id){
		$this->db->where('id',$id);
		$this->db->delete('user');
	}
}

