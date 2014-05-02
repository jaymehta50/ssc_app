<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('problems_model');
		$this->av_char_width = 7;
		$this->load->library('session');
		$this->problems_model->track_user($_SERVER['REMOTE_USER']);
	}

	public function index()
	{
		$data['base_url'] = base_url();
		$data['adult_probs'] = $this->problems_model->getprobnames(FALSE);
		$data['child_probs'] = $this->problems_model->getprobnames(TRUE);
		$this->load->view('header',$data);
		$this->load->view('intro',$data);
		$this->load->view('adult_prob',$data);
		$this->load->view('child_prob',$data);
		$this->load->view('general_info',$data);
		$this->load->view('edit_note',$data);
		$this->my_notes();
		$this->load->view('menu',$data);
		$this->load->view('footer',$data);
	}

	public function problem($problem)
	{
		$data['av_char_width'] = $this->av_char_width;
		$data['one_problem'] = $this->problems_model->getproblem($problem);
		$data['problem_name'] = $this->problems_model->getprobname($problem);
		$this->load->view('problem',$data);
	}

	public function condition($prob_id)
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
		$this->problems_model->editnote($this->input->post('id'), $this->input->post('note'));
		echo nl2br($this->input->post('note'));
	}







	public function child_prob($problem)
	{
		$data['av_char_width'] = $this->av_char_width;
		$data['one_child_prob'] = $this->problems_model->getproblem($problem);
		$data['problem_name'] = $this->problems_model->getprobname($problem);
		$this->load->view('one_child_prob',$data);
	}

	public function adult_condition($prob_id)
	{
		$data['av_char_width'] = $this->av_char_width;
		$data['base_url'] = base_url();
		$data['condition'] = $this->problems_model->getcondition($prob_id);
		$data['notes'] = $this->problems_model->getnotes($prob_id, $_SERVER['REMOTE_USER']);
		$this->load->view('one_condition',$data);
	}

	public function child_condition($prob_id)
	{
		$data['av_char_width'] = $this->av_char_width;
		$data['base_url'] = base_url();
		$data['condition'] = $this->problems_model->getchildcondition($prob_id);
		$data['notes'] = $this->problems_model->getnotes($prob_id, $_SERVER['REMOTE_USER']);
		$this->load->view('one_condition_child',$data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */