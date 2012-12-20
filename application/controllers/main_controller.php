<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	/**
         *<<<<<<<: keep things explained here
	 *  Index Page for this controller.
	 *  Navegation Methods: starts with "goto_";
         *  Operation Methods: starts with "do_";
         *  
	 */
	public function index()
	{

		$this->load->view('public/welcome_message');
	}
        /*
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
            //echo $config['footer'] = '';

            $this->load->view('public/template/template',$data);
	}
        public function goto_bio()
	{
            //$this->load->model('bd_cesar');
            $config= array(
                'main' => 'public/bio'
            );
            $this->lang->load('strings','english');
            $data['msg'] = $this->lang->line('msg');

            $this->template($config,$data);
	}
        public function teste()
	{
            //$this->load->model('bd_cesar');
            $config= array(
                'main' => 'public/test_index',
                'banner' => 'public/template/banner'
            );
            $this->lang->load('strings','english');
            $data['msg'] = $this->lang->line('msg');

            $this->template($config,$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */