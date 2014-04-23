<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('problems_model');
		$this->av_char_width = 7;
	}

	public function index()
	{
		$data['base_url'] = base_url();
		$data['adult_probs'] = $this->problems_model->getadultprobnames();
		$this->load->view('header',$data);
		$this->load->view('intro',$data);
		$this->load->view('adult_prob',$data);
		$this->load->view('general_info',$data);
		$this->load->view('menu',$data);
		$this->load->view('footer',$data);
	}

	public function adult_prob($problem)
	{
		$data['av_char_width'] = $this->av_char_width;
		$data['one_adult_prob'] = $this->problems_model->getoneadultprob($problem);
		$data['problem_name'] = $this->problems_model->getprobnameadult($problem);
		$this->load->view('one_adult_prob',$data);
	}

	public function adult_condition($prob_id)
	{
		$data['av_char_width'] = $this->av_char_width;
		$data['base_url'] = base_url();
		$data['condition'] = $this->problems_model->getcondition($prob_id);
		$data['notes'] = $this->problems_model->getnotes($prob_id, $_SERVER['REMOTE_USER']);
		$this->load->view('one_condition',$data);
	}

	public function my_notes()
	{
		$data['my_notes'] = $this->problems_model->getnotes(FALSE, $_SERVER['REMOTE_USER']);
		if($data['my_notes']) $data['condition_names'] = $this->problems_model->getconditionnames($data['my_notes']);
		$this->load->view('my_notes',$data);
	}

	public function addnote()
	{
		echo $this->problems_model->addnote($this->input->post('id'), $this->input->post('newnote'), $_SERVER['REMOTE_USER']);
	}

	public function removenote()
	{
		$this->problems_model->removenote($this->input->post('id'));
	}

	public function editnote()
	{
		$this->problems_model->removenote($this->input->post('id'), $this->input->post('note'));
		echo "Woop!";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */