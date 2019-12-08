<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pegawai extends CI_Controller
{

    public function index()
    {

        $this->template->load('template', 'pegawai/data_pegawai');
    }
}
