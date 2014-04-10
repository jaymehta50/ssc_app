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

	public function getoneadultprob($problem)
	{
		$this->db->order_by('problem_subgroup','asc');
		$this->db->where("lower(clinical_problem) = '".str_replace("_", " ", $problem)."'");
		$query = $this->db->get('problem_list_adult');
		return $query->result_array();
	}


}