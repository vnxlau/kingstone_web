<?php 
$this->load->view('public/template/head');
$this->load->view('public/template/logo_menu');
if($banner!='')$this->load->view($banner);
$this->load->view($main);
$this->load->view('public/template/footer'); 
?>