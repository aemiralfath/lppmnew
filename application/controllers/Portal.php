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

        }

        public function index()
        {
            $this->data['titile'] = 'Portal';
            $this->data['content'] = 'portal/home';
            $this->data['breadcrumb'] = array('Home' => base_url());
            $this->template($this->data);
        }
    }

?>