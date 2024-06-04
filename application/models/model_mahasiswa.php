<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_mahasiswa extends CI_Model {

    public function getDataMahasiswa(){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insertDataMahasiswa(){
        $data = [
            'NIM' => $this->input->post('NIM', true),
            'NamaMahasiswa' => $this->input->post('NamaMahasiswa', true),
            'Jurusan' => $this->input->post('Jurusan', true),
        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function getDataMahasiswaById($id){
        $this->db->where('NIM', $id);
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }

    public function updateDataMahasiswa(){
        $data = [
            'NamaMahasiswa' => $this->input->post('NamaMahasiswa', true),
            'Jurusan' => $this->input->post('Jurusan', true),
        ];

        $this->db->where('NIM', $this->input->post('NIM', true));
        $this->db->update('mahasiswa',$data);
    }

    public function hapusDataMahasiswa($id) {
        $this->db->where('NIM', $id);
        $this->db->delete('mahasiswa');
    }
}