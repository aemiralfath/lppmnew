<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
* @author Ahmad Emir Alfatah
*/

class Logout extends MY_Controller
{
	public function index()
	{
		$this->session->unset_userdata('username');
		redirect('login');
		exit;
	}
}
