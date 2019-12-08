<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        check_not_login();
        check_admin();
        $this->load->model('user_m');
    }

    public function index()
    {

        $data['row'] = $this->user_m->get();
        $this->template->load('template', 'user/user_data', $data);
    }

    public function add()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('telp', 'Telp', 'required|min_length[8]|max_length[12]');
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'user/user_form_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo " <script>window.location='" . site_url('user') . "';</script>";
            }
        }
    }

    public function del()
    {

        $id = $this->input->post('id_user');
        $this->user_m->del($id);

        if ($this->db->affected_rows() > 0) {
            echo " <script>window.location='" . site_url('user') . "';</script>";
        }
    }

    public function edit($id)
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('telp', 'Telp', 'required|min_length[8]|max_length[12]');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->user_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'user/user_form_edit', $data);
            } else {
                echo "<script> alert('data tidak di ditemukan');</script>";
                echo " <script>window.location='" . site_url('user') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script> alert('data berhasil di ubah');</script>";
            }
            echo " <script>window.location='" . site_url('user') . "';</script>";
        }
    }
}
