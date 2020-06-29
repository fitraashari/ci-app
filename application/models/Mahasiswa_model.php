<?php

class Mahasiswa_model extends CI_model{
    public function getAllMahasiswa(){
        return $query = $this->db->get('mahasiswa')->result_array();
        
    }
    public function tambahDataMahasiswa(){
        $data = array(
            'nama'=> $this->input->post('nama', true),
            'nim'=> $this->input->post('nim', true),
            'email'=> $this->input->post('email', true),
            'jurusan'=> $this->input->post('jurusan', true),
        );
        $this->db->insert('mahasiswa',$data);
    }
    public function hapusDataMahasiswa($id){
       // $this->db->where('id',$id);
        $this->db->delete('mahasiswa',['id'=>$id]);
    }
    public function getMahasiswaById($id){
        return $this->db->get_where('mahasiswa',['id'=>$id])->row_array();
    }
    public function ubahDataMahasiswa(){
        $data = array(
            'nama'=> $this->input->post('nama', true),
            'nim'=> $this->input->post('nim', true),
            'email'=> $this->input->post('email', true),
            'jurusan'=> $this->input->post('jurusan', true),
        );
        $this->db->where('id',$this->input->post('id', true));
        $this->db->update('mahasiswa', $data);
    }
}