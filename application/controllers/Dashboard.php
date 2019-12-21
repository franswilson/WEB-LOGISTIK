<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller


{
	//public function __construct()
	//{
	//	parent::__construct();
	//	$this->load->model('user_m');
	//}

	public function index()
	{
		$this->load->model('pegawai_m');
		$this->load->model('user_m');
		check_not_login();
		$data['test1'] = $this->pegawai_m->count_row();
		$data['test2'] = $this->user_m->count_row();
		$this->template->load('template', 'utama', $data);
	}
}
