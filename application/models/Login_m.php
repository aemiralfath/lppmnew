<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Login_m extends MY_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->data['primary_key'] = 'username';
            $this->data['table_name'] = 'admin';
        }

        public function login($data)
        {
            $result = $this->get_row($data);
            if(isset($result))
            {
                $this->session->set_userdata('username',$result->username);
                return true;
            }else{
                return false;
            }
        }
    }
?>