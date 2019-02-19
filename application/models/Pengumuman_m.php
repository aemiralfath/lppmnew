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

        public function getPengumuman(){
            return $this->db->query('select * from pengumuman order by post_date desc limit 5')->result();
        }
    }

?>