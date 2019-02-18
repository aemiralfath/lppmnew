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
            $this->data['event'] = $this->event_m->getDataJoin(['event_photo'],['event.id_event = event_photo.id_event'],'status = 1');
            $this->data['portal'] = $this->pengumuman_m->get();
            $this->data['breadcrumb'] = array('Home' => base_url());
            $this->template($this->data);
        }

        public function read_event($id)
        {
            $this->data['titile'] = 'Portal';
            $this->data['content'] = 'portal/event';
            $this->data['event'] = $this->event_m->get("id_event = $id");
            
            $uname = $this->data['event'][0]->username;
            $this->data['admin'] = $this->admin_m->get("username = '$uname'");
            $this->data['breadcrumb'] = array('Home' => base_url());
            $this->template($this->data);
        }

        public function read_pengumuman($id)
        {
            $this->data['titile'] = 'Portal';
            $this->data['content'] = 'portal/event';
            $this->data['breadcrumb'] = array('Home' => base_url());
            $this->data['event'] = $this->pengumuman_m->get("id_pengumuman = $id");
            
            $uname = $this->data['event'][0]->username;
            $this->data['admin'] = $this->admin_m->get("username = '$uname'");
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
