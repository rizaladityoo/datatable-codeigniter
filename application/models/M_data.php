<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_data extends CI_Model{

	Public function ambil_data(){
		return $this->db->get('user');
	}

	// public function save_data(){
	// 	$post = $this->input->post();
	// 	$this->db->insert(
	// 			'user',
	//
	// 	);
	// }

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function json_data(){
		$hsl=$this->db->query("SELECT * FROM user");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'photo' => $data->photo,
                    'nama' => $data->nama,
                    'email' => $data->email,
                    'no_telepon' => $data->no_telepon,
                    'gender' => $data->gender,
                    'pekerjaan' => $data->pekerjaan
                    );
            }
        }
        return $hasil;
	}

}
