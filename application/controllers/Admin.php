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
            $this->load->model('login_m');
            $this->load->model('event_m');
            $this->data['username'] = $this->session->userdata('username');
            $this->data['admin'] = $this->login_m->get_row(["username"=>$this->data['username']]);
            if(!isset($this->data['username']))
            {
                $this->session->unset_userdata('username');
			    $this->flashmsg('<i class="fa fa-warning"></i> You must login first!', 'warning');
			    redirect('login');
            }
        }

        public function index()
        {
            $this->data['content'] = 'admin/Dashboard';
            $this->data['title'] = 'Dashboard | '.$this->title;
            $this->data['active'] = 1;
            $this->load->view("admin/template/layout",$this->data);
        }

        public function event()
        {
            $this->data['event'] = $this->event_m->getDataJoin(['admin'],['admin.username = event.username']);
            $this->data['content'] = 'admin/event';
            $this->data['title'] = 'Event | '.$this->title;
            $this->data['active'] = 2;
            $this->load->view("admin/template/layout",$this->data);
        }
    }
?>