<?php
     defined('BASEPATH') or exit('No direct script access allowed');
     /**
     * @author Ahmad Emir Alfatah
     */
     class Pengumuman_files_m extends MY_Model
     {
          function __construct()
          {
               parent::__construct();
               $this->data['primary_key'] = 'id_pengumuman_files';
               $this->data['table_name'] = 'pengumuman_files';
          }
     }
?>