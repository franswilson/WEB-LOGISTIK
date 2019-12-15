<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pegawai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        check_not_login();
        check_admin();
        $this->load->model('pegawai_m');
    }

    public function index()
    {

        $data['row'] = $this->pegawai_m->get();
        $this->template->load('template', 'pegawai/data_pegawai', $data);
    }

    public function add()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('telp', 'Telp', 'required|min_length[8]|max_length[12]');
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'pegawai/pegawai_form_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->pegawai_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo " <script>window.location='" . site_url('pegawai') . "';</script>";
            }
        }
    }

    public function del()
    {

        $id = $this->input->post('id_pegawai');
        $this->pegawai_m->del($id);

        if ($this->db->affected_rows() > 0) {
            echo " <script>window.location='" . site_url('pegawai') . "';</script>";
        }
    }

    public function edit($id)
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('telp', 'Telp', 'required|min_length[8]|max_length[12]');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->pegawai_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'pegawai/pegawai_form_edit', $data);
            } else {
                echo "<script> alert('data tidak di ditemukan');</script>";
                echo " <script>window.location='" . site_url('pegawai') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->pegawai_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script> alert('data berhasil di ubah');</script>";
            }
            echo " <script>window.location='" . site_url('pegawai') . "';</script>";
        }
    }
}
