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
            $this->load->model('admin_m');
            $this->load->model('event_photo_m');
            $this->load->model('pengumuman_files_m');
            $this->load->model('pengumuman_m');
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

        public function tambah_event()
        {
            $this->data['author'] = $this->admin_m->get();
            $this->data['content'] = 'admin/tambah_event';
            $this->data['title'] = 'Tambah Event | '.$this->title;
            $this->data['active'] = 2;
            if($this->post('submit'))
            {
                $insert = [
                    "title" => $this->post('title'),
                    "content" => $this->post('content'),
                    "username" => $this->post('author'),
                ];
                $this->event_m->insert($insert);
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil Disimpan!!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('admin/event');
                exit;
            }
            $this->load->view("admin/template/layout",$this->data);
        }

        public function edit_event($id)
        {
            $this->data['author'] = $this->admin_m->get();
            $this->data['content'] = 'admin/edit_event';
            $this->data['title'] = 'Edit Event | '.$this->title;
            $this->data['event'] = $this->event_m->get_row("id_event =$id");
            $this->data['active'] = 2;
            if($this->post('submit'))
            {
                $update = [
                    "title" => $this->post('title'),
                    "content" => $this->post('content'),
                    "username" => $this->post('author'),
                ];
                $this->event_m->update($id,$update);
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil Disimpan!!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('admin/event');
                exit;
            }
            $this->load->view('admin/template/layout',$this->data);
        }

        public function event_photo($id)
        {
            $this->data['content'] = 'admin/event_photo';
            $this->data['title'] = 'Event Photos | '.$this->title;
            $this->data['event'] = $this->event_photo_m->db->query("select * from event left outer join event_photo on event.id_event = event_photo.id_event where event.id_event = $id")->result();
            $this->data['active'] = 2;
            if($this->post('submit'))
            {

            }
            $this->load->view('admin/template/layout',$this->data);
        }

        public function delete_event($id)
        {
            $this->event_m->delete($id);
            redirect('admin/event');
            exit;
        }

        public function pengumuman()
        {
            $this->data['pengumuman'] = $this->pengumuman_m->getDataJoin(['admin'],['admin.username = pengumuman.username']);
            $this->data['content'] = 'admin/pengumuman';
            $this->data['title'] = 'Pengumuman | '.$this->title;
            $this->data['active'] = 3;
            $this->load->view('admin/template/layout',$this->data);
        }

        public function tambah_pengumuman()
        {
            $this->data['author'] = $this->admin_m->get();
            $this->data['content'] = 'admin/tambah_pengumuman';
            $this->data['title'] = 'Tambah Pengumuman | '.$this->title;
            $this->data['active'] = 2;
            if($this->post('submit'))
            {
                $insert = [
                    "title" => $this->post('title'),
                    "content" => $this->post('content'),
                    "sumber" => $this->post('sumber'),
                    "username" => $this->post('author'),
                ];
                $this->pengumuman_m->insert($insert);
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil Disimpan!!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('admin/pengumuman');
                exit;
            }
            $this->load->view('admin/template/layout',$this->data);
        }

        public function edit_pengumuman($id)
        {
            $this->data['author'] = $this->admin_m->get();
            $this->data['content'] = 'admin/edit_pengumuman';
            $this->data['title'] = 'Edit Pengumuman | '.$this->title;
            $this->data['pengumuman'] = $this->pengumuman_m->get_row("id_pengumuman =$id");
            $this->data['active'] = 2;
            if($this->post('submit'))
            {
                $update = [
                    "title" => $this->post('title'),
                    "content" => $this->post('content'),
                    "sumber" => $this->post('sumber'),
                    "username" => $this->post('author'),
                ];
                $this->pengumuman_m->update($id,$update);
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil Disimpan!!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('admin/pengumuman');
                exit;
            }
            $this->load->view('admin/template/layout',$this->data);
        }

        public function pengumuman_file($id)
        {
            $this->data['content'] = 'admin/pengumuman_files';
            $this->data['title'] = 'Pengumuman Files | '.$this->title;
            $this->data['pengumuman'] = $this->pengumuman_files_m->getDataJoinWhere(['pengumuman'],['pengumuman.id_pengumuman = pengumuman_files.id_pengumuman'],['id_pengumuman_files'=>$id]);
            $this->data['active'] = 3;
            if($this->post('submit'))
            {
                
            }
            $this->load->view('admin/template/layout',$this->data);
        }

        public function deletePengumuman($id)
        {
            $this->pengumuman_m->delete($id);
            redirect('admin/pengumuman');
            exit;
        }
    }
?>