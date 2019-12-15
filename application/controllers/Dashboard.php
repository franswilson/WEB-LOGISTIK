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

		check_not_login();
		$this->template->load('template', 'utama');
	}
}
