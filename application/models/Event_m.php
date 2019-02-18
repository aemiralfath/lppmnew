<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Event_m extends MY_Model
    {
        function __construct()
        {
            parent::__construct();
            $this->data['primary_key'] = 'id_event';
            $this->data['table_name'] = 'event';
        }

        public function getEvent(){
            return $this->db->query('select event.*, event_photo.* from event inner join event_photo on event.id_event = event_photo.id_event')->result();
        }
    }
?>