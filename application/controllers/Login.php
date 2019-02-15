<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    class Login extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('login_m');
            $this->data['username'] = $this->session->userdata('username');
            if (isset($this->data['username']))
            {
                    redirect('admin');
            }
        }

        public function index()
        {
            $this->data['content'] = 'login';
            $this->data['title'] = 'Login |'.$this->title;
            if($this->POST('login'))
            {
                $required = array('username','password');
                if(!$this->login_m->required_input($required))
                {
                    // $this->flashmsg('All data must to be filled','warning');
                    echo "<script>alert('All data must to be filled')</script>";
                    redirect('login');
                    exit;
                }
                $user=array(
                    'username'=>$this->input->post('username'),
                    'password'=>md5($this->input->post('password'))
                );
                $data = $this->login_m->login($user);
                if($data)
                {
                    redirect('login');
                }else{
                    // $this->flashmsg('Wrong Username or Password','danger');
                    echo "<script>alert('Wrong Username or Password')</script>";
                    redirect('login');
                }
            }
            $this->load->view('login',$this->data);
        }
    }
?>