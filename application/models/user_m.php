<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_m extends CI_Model
{
    public function edit($post)
    {


        $params['username'] = $post['username'];
        $params['password'] = $post['password'];
        $params['address'] = $post['address'];
        $params['email'] = $post['email'];
        $params['telp'] = $post['telp'];
        $params['level'] = $post['level'];
        $this->db->where('id_user', $post['id_user']);
        $this->db->update('user', $params);
    }

    public function del($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

    public function login($post)
    {
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', $post['password']);

        $query = $this->db->get();

        return $query;
    }


    public function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['username'] = $post['username'];
        $params['password'] = $post['password'];
        $params['address'] = $post['address'];
        $params['email'] = $post['email'];
        $params['telp'] = $post['telp'];
        $params['level'] = $post['level'];
        $this->db->insert('user', $params);
    }
}
