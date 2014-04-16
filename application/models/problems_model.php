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
		return $query->result_array();
	}

	public function getprobnameadult($problem)
	{
		$this->db->where('problem_id_adult', $problem);
		$query = $this->db->get('problem_names_adult');
		return $query->row_array();
	}

	public function getcondition($prob_id)
	{
		$this->db->where('id', $prob_id);
		$query = $this->db->get('problem_list_adult');
		$temp = $query->row_array();
		$temp2 = $this->getprobnameadult($temp['clinical_problem_id']);
		$temp['clinical_problem'] = $temp2['clinical_problem'];
		return $temp;
	}

/*
	public function getcondition($id = null)
	{
		if(!is_null($id)) {
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
	*/


}