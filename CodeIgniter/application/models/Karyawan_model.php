<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
    private $_table = "karyawan";

    public $id_karyawan;
    public $nama_karyawan;
    public $alamat_karyawan;
    public $no_telp;

   

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_karyawan)
    {
        return $this->db->get_where($this->_table, ["id_karyawan" => $id_karyawan])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_karyawan = uniqid();
        $this->nama_karyawam = $post["nama_karyawam"];
        $this->alamat_karyawam = $post["alamat_karyawan"];
        $this->no_telp = $post["no_telp"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_karyawan = $post["id_karyawan"];
        $this->nama_karyawan = $post["nama_karyawan"];
        $this->alamat_karyawan = $post["alamat_karyawan"];
        $this->no_telp = $post["no_telp"];
        $this->db->update($this->_table, $this, array('id_karyawan' => $post['id_karyawan']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_karyawan" => $id_karyawan));
    }
};