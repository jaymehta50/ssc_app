<?php
class Problems_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getadultprob()
	{
		$this->db->distinct();
		$this->db->select('clinical_problem');
		$this->db->order_by('clinical_problem','asc');
		$query = $this->db->get('problem_list_adult');
		return $query->result_array();
	}


}