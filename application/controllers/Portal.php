<?php
    defined('BASEPATH') or exit('No direct script access allowed');
     /**
    * @author Ahmad Emir Alfatah
    */
    class Portal extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('event_m');
            $this->load->model('admin_m');
            $this->load->model('event_photo_m');
            $this->load->model('pengumuman_files_m');
            $this->load->model('pengumuman_m');
        }

        public function index()
        {
            $this->data['titile'] = 'Portal';
            $this->data['content'] = 'portal/home';
            $this->data['event'] = $this->event_m->getEvent();
            $this->data['breadcrumb'] = array('Home' => base_url());
            $this->template($this->data);
        }

        public function read_event()
        {
            $this->data['titile'] = 'Portal';
            $this->data['content'] = 'portal/single_post';
            $this->data['breadcrumb'] = array('Home' => base_url());
            $this->template($this->data);
        }

        public function read_pengumuman()
        {
            $this->data['titile'] = 'Portal';
            $this->data['content'] = 'portal/single_post';
            $this->data['breadcrumb'] = array('Home' => base_url());
            $this->template($this->data);
        }
        public function read_sejarah()
        {
            $this->data['titile'] = 'Portal';
            $this->data['content'] = 'portal/sejarah';
            $this->data['breadcrumb'] = array('Home' => base_url());
            $this->template($this->data);
        }
        public function read_struktur()
        {
            $this->data['titile'] = 'Portal';
            $this->data['content'] = 'portal/struktur';
            $this->data['breadcrumb'] = array('Home' => base_url());
            $this->template($this->data);
        }
        public function read_visi()
        {
            $this->data['titile'] = 'Portal';
            $this->data['content'] = 'portal/visi';
            $this->data['breadcrumb'] = array('Home' => base_url());
            $this->template($this->data);
        }
        public function read_renstra()
        {
            $this->data['titile'] = 'Portal';
            $this->data['content'] = 'portal/renstra';
            $this->data['breadcrumb'] = array('Home' => base_url());
            $this->template($this->data);
        }
        public function read_rip()
        {
            $this->data['titile'] = 'Portal';
            $this->data['content'] = 'portal/rip';
            $this->data['breadcrumb'] = array('Home' => base_url());
            $this->template($this->data);
        }
        public function read_kontak()
        {
            $this->data['titile'] = 'Portal';
            $this->data['content'] = 'portal/kontak';
            $this->data['breadcrumb'] = array('Home' => base_url());
            $this->template($this->data);
        }
    }

?>
