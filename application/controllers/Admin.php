<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    /**
    * @author Ahmad Emir Alfatah
    */

    class Admin extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Login_m');
            $this->data['username'] = $this->session->userdata('username');
            if(!isset($this->data['username']))
            {
                $this->session->unset_userdata('username');
			    $this->flashmsg('<i class="fa fa-warning"></i> You must login first!', 'warning');
			    redirect('login');
            }
        }

        public function index()
        {
            $this->data['admin'] = $this->login_m->get_row($this->data['username']);
            $this->data['content'] = 'admin/dashboard';
            $this->data['title'] = 'dashboard'.$this->title;
            $this->data['active'] = 1;
            $this->load->view("admin/template/layout",$this->data);

        }
    }
?>