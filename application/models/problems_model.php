<?php
class Problems_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getadultprob()
	{
		/*
		$this->db->distinct();
		$this->db->select('clinical_problem');
		$this->db->order_by('clinical_problem','asc');
		$query = $this->db->get('problem_list_adult');
		return $query->result_array();
		*/
	}

	public function getadultprobnames()
	{
		$query = $this->db->get('problem_names_adult');
		return $query->result_array();
	}

	public function getoneadultprob($problem)
	{
		$this->db->order_by('problem_subgroup','asc');
		$this->db->where('clinical_problem_id', $problem);
		$query = $this->db->get('problem_list_adult');
		$toreturn = array();
		foreach($query->result_array() as $value) {
			$temp = array();
			$temp = $value;
			$temp['condition'] = $this->getcondition($value['condition_id']);
			$toreturn[] = $temp;
		}
		return $toreturn;
	}

	public function getprobnameadult($problem)
	{
		$this->db->where('problem_id_adult', $problem);
		$query = $this->db->get('problem_names_adult');
		return $query->row_array();
	}

	public function getcondition($id = null)
	{
		if(!isnull($id)) {
			$this->db->where('condition_id', $id);
			$query = $this->db->get('conditions_adult');
			$temp = $query->row_array();
			return $temp['condition'];
		}
		else {
			$query = $this->db->get('conditions_adult');
			return $query->result_array();
		}


	}


}