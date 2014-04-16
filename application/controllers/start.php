<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('problems_model');
	}

	public function index()
	{
		$data['base_url'] = base_url();
		$data['adult_probs'] = $this->problems_model->getadultprobnames();
		$this->load->view('header',$data);
		$this->load->view('intro',$data);
		//$this->load->view('menu',$data);
		$this->load->view('adult_prob',$data);
		$this->load->view('footer',$data);
	}

	public function adult_prob($problem)
	{
		$data['one_adult_prob'] = $this->problems_model->getoneadultprob($problem);
		$data['problem_name'] = $this->problems_model->getprobnameadult($problem);
		$this->load->view('one_adult_prob',$data);
	}

	public function adult_condition($prob_id)
	{
		$data['condition'] = $this->problems_model->getcondition($prob_id);
		$this->load->view('one_condition',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */