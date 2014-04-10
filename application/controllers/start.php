<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('problems_model')
	}

	public function index()
	{
		$data['base_url'] = base_url();
		$data['adult_probs'] = $this->problems_model->getadultprob();
		$this->load->view('header',$data);
		$this->load->view('intro',$data);
		$this->load->view('menu',$data);
		$this->load->view('adult_prob',$data);
		$this->load->view('footer',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */