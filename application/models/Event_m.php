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
    }
?>