<?php
$this->load->view("admin/template/title");
$this->load->view("admin/template/sidebar");
$this->load->view("admin/template/navbar");
$this->load->view($content);
$this->load->view("admin/template/footer");

?>