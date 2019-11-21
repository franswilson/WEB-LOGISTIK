<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login()
    {
        $this->load->view('login');
    }

    public function register()
    {
        $this->load->view('register');
    }

    public function process()
    {
        $post = $this->input->post(null, true);
        if (isset($_POST['login'])) {
            echo "proses login";
        } else {
            echo "tidak ada post";
        }
    }
}
