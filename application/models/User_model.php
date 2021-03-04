<?php 
	class User_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_users($id = FALSE){
			if($id === FALSE){
				$this->db->order_by('id', 'ASC');
				$query = $this->db->get('user');
				return $query->result_array();
			}

			$query = $this->db->get_where('user', array('id' => $id));
			return $query->row_array();
		}

		public function add_user(){
			$data = array(
				'first_name' => $this->input->post('first-name'),
				'last_name' => $this->input->post('last-name'),
				'position' => $this->input->post('position')
			);

			return $this->db->insert('user', $data);
		}

		public function delete_user($id){
			$this->db->where('id', $id);
			$this->db->delete('user');
			return true;
		}

		public function update_post(){
			$data = array(
				'first_name' => $this->input->post('first-name'),
				'last_name' => $this->input->post('last-name'),
				'position' => $this->input->post('position')
			);

			$this->db->where('id', $this->input->post('user_id'));
			return $this->db->update('user', $data);
		}
	}
?>