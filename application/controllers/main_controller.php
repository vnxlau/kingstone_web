<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	/**
         *<<<<<<<: keep things explained here
	 *  Index Page for this controller.
	 *  Navegation Methods: starts with "goto_";
         *  Operation Methods: starts with "do_";
         *  
         * Use to call views
         * 
         */
        public function template($config = 'NULL', $data)
	{
            if(!isset($config['banner']) || $config=='NULL'){
                $data['banner'] = '';
            }
            else{
                $data['banner']= $config['banner'];
            }
            if(!isset($config['main']) || $config=='NULL'){           
                $data['main'] = 'home';
            }
            else {
                $data['main']=$config['main'];
            }
            $this->load->view('public/template/template',$data);
	}
        public function index()
	{
            $config= array(
                'main' => 'public/welcome_message'
            );
            $this->lang->load('strings','pt');
            $data['msg'] = $this->lang->line('msg');
            $this->template($config,$data);
	}
        /*
         * 
         * Navegação - Inicio
         */
        public function empresa()
	{
            $config= array(
                'main' => 'public/empresa'
            );
            $this->lang->load('strings','english');
            $data['msg'] = $this->lang->line('msg');
            $this->template($config,$data);
	}
        public function produtos()
	{
            $config= array(
                'main' => 'public/produtos'
            );
            $this->lang->load('strings','english');
            $data['msg'] = $this->lang->line('msg');
            $this->template($config,$data);
	}
        public function servicos()
	{
            $config= array(
                'main' => 'public/servicos'
            );
            $this->lang->load('strings','english');
            $data['msg'] = $this->lang->line('msg');
            $this->template($config,$data);
	}
        public function portfolio()
	{
            $config= array(
                'main' => 'public/portfolio'
            );
            $this->lang->load('strings','english');
            $data['msg'] = $this->lang->line('msg');
            $this->template($config,$data);
	}
        public function contactos()
	{
            $config= array(
                'main' => 'public/contactos'
            );
            $this->lang->load('strings','english');
            $data['msg'] = $this->lang->line('msg');
            $this->template($config,$data);
	}
        /*
         * 
         * Fim - Navegação
         */
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */