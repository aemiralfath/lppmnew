<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Pengumuman_m extends MY_Model
    {
        function __construct()
        {
            parent::__construct();
            $this->data['table_name'] = 'pengumuman';
            $this->data['primary_key'] = 'id_pengumuman';
        }
    }

?>