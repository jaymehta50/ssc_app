<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data['base_url'] = base_url();
		$this->load->view('header',$data);
		$this->load->view('demo',$data);
		$this->load->view('footer',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */