<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function login()
    {

        $this->load->view('login');
        check_already_login();
    }

    public function logout()
    {
        $params = array('id_user', 'level');
        $this->session->unset_userdata($params);
        redirect('auth/login');
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('address', 'address', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('telp', 'Telp', 'required|trim');


        if ($this->form_validation->run() == false) {
            $this->load->view('register');
        } else {
            $data = [
                'username' => $this->input->post('username', true),
                'password' => $this->input->post('password', true),
                'address' => $this->input->post('address', true),
                'email' => $this->input->post('email', true),
                'telp' => $this->input->post('telp', true),
                'level' => 2,

            ];
            $this->db->insert('user', $data);
            redirect('auth/login');
        }
    }

    public function process()
    {
        $post = $this->input->post(null, true);
        if (isset($post['login'])) {
            $this->load->model('user_m', 'user');
            $query = $this->user->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'id_user' => $row->id_user,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);
                echo "<script> 
                alert('selamat, login berhasil');
                window.location='" . site_url('dashboard') . "';
                </script>";
            } else {
                echo "<script> 
                alert('maaf, login gagal');
                window.location='" . site_url('auth/login') . "';
                </script>";
            }
        }
    }
}
