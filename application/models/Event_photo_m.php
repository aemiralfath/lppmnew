<?php
     defined('BASEPATH') or exit('No direct script access allowed');
     /**
     * @author Ahmad Emir Alfatah
     */
     class Event_photo_m extends MY_Model
     {
          function __construct()
          {
               parent::__construct();
               $this->data['primary_key'] = 'id_event_photo';
               $this->data['table_name'] = 'event_photo';
          }
     }
?>