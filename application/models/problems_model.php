<?php
class Problems_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function track_user($user)
	{
		$this->db->where('crsid', $user);
		$query = $this->db->get('prob_user');
		if($query->num_rows()==0)
		{
			$data = array('crsid' => $user, 'last_login' => date("Y-m-d H:i:s"));
			$this->db->insert('prob_user', $data);
		}
		else {
			$this->db->where('crsid', $user);
			$this->db->update('prob_user', array("last_login" => date("Y-m-d H:i:s")));
		}
	}

	public function getprobnames($child = FALSE)
	{
		if($child) $this->db->where('child', 1);
		else $this->db->where('child', 0);
		$this->db->order_by('clinical_problem','asc');
		$query = $this->db->get('problem_names');
		return $query->result_array();
	}

	public function getproblem($problem)
	{
		$this->db->order_by('problem_subgroup','asc');
		$this->db->where('clinical_problem_id', $problem);
		$query = $this->db->get('problem_list');
		return $query->result_array();
	}

	public function getprobname($problem)
	{
		$this->db->where('problem_id', $problem);
		$query = $this->db->get('problem_names');
		return $query->row_array();
	}

	public function getcondition($prob_id)
	{
		$this->db->where('id', $prob_id);
		$query = $this->db->get('problem_list');
		$temp = $query->row_array();
		$temp2 = $this->getprobname($temp['clinical_problem_id']);
		$temp['clinical_problem'] = $temp2['clinical_problem'];
		return $temp;
	}

	public function getnotes($condition_id, $user)
	{
		$this->db->where('visible', 1);
		$this->db->where('user', $user);
		if($condition_id) $this->db->where('condition_id', $condition_id);
		$this->db->order_by('condition_id','asc');
		$this->db->order_by('date_created','asc');
		$query = $this->db->get('notes');
		if($query->num_rows()==0) return FALSE;
		else return $query->result_array();
	}

	public function getconditionnames($array)
	{
		$temp = array();
		foreach($array as $value)
			{
				if(!isset($temp[$value['condition_id']])) $temp[$value['condition_id']] = $this->get_cond_name($value['condition_id']);
			}
		return $temp;
	}

	public function get_cond_name($cond_id)
	{
		$this->db->where('id', $cond_id);
		$query = $this->db->get('problem_list');
		$temp = $query->row_array();
		return $temp['condition'];
	}





	public function getadultprobnames()
	{
		$this->db->where('child', 0);
		$this->db->order_by('clinical_problem','asc');
		$query = $this->db->get('problem_names_adult');
		return $query->result_array();
	}

	public function getchildprobnames()
	{
		$this->db->where('child', 1);
		$this->db->order_by('clinical_problem','asc');
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

	public function getonechildprob($problem)
	{
		$this->db->order_by('problem_subgroup','asc');
		$this->db->where('clinical_problem_id', $problem);
		$query = $this->db->get('problem_list_child');
		return $query->result_array();
	}

	public function getprobnameadult($problem)
	{
		$this->db->where('problem_id_adult', $problem);
		$query = $this->db->get('problem_names_adult');
		return $query->row_array();
	}

/*
	public function getcondition($prob_id)
	{
		$this->db->where('id', $prob_id);
		$query = $this->db->get('problem_list_adult');
		$temp = $query->row_array();
		$temp2 = $this->getprobnameadult($temp['clinical_problem_id']);
		$temp['clinical_problem'] = $temp2['clinical_problem'];
		return $temp;
	}
	*/

	public function getchildcondition($prob_id)
	{
		$this->db->where('id', $prob_id);
		$query = $this->db->get('problem_list_child');
		$temp = $query->row_array();
		$temp2 = $this->getprobnameadult($temp['clinical_problem_id']);
		$temp['clinical_problem'] = $temp2['clinical_problem'];
		return $temp;
	}



	public function addnote($cond_id, $note, $user)
	{
		$data = array(
			'user' => $user,
			'condition_id' => $cond_id,
			'note' => htmlentities(nl2br($note), ENT_QUOTES)
			);
		$this->db->insert('notes', $data);
		return $this->db->insert_id();
	}

	public function removenote($note_id)
	{
		$this->db->where('id', $note_id);
		$this->db->update('notes', array("visible" => 0));
	}

	public function editnote($note_id,$text)
	{
		$this->db->where('id', $note_id);
		$this->db->update('notes', array("note" => htmlentities(nl2br($text), ENT_QUOTES)));
	}

}