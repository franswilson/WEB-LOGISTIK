<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pegawai_m extends CI_Model
{
    public function edit($post)
    {


        $params['username'] = $post['username'];
        $params['address'] = $post['address'];
        $params['email'] = $post['email'];
        $params['telp'] = $post['telp'];
        $this->db->where('id_pegawai', $post['id_pegawai']);
        $this->db->update('pegawai', $params);
    }

    public function del($id)
    {
        $this->db->where('id_pegawai', $id);
        $this->db->delete('pegawai');
    }



    public function get($id = null)
    {
        $this->db->from('pegawai');
        if ($id != null) {
            $this->db->where('id_pegawai', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['username'] = $post['username'];
        $params['address'] = $post['address'];
        $params['email'] = $post['email'];
        $params['telp'] = $post['telp'];
        $this->db->insert('pegawai', $params);
    }
}
