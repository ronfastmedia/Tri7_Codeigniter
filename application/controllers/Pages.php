<?php 
	class Pages extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);

			$data['users'] = $this->user_model->get_users();

			$this->load->view('global_partials/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('global_partials/footer');
		}

		public function add(){
			$data['title'] = 'Add New';

			$this->form_validation->set_rules('first-name', 'First Name', 'required');
			$this->form_validation->set_rules('last-name', 'Last Name', 'required');
			$this->form_validation->set_rules('position', 'Position', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('global_partials/header');
				$this->load->view('pages/add', $data);
				$this->load->view('global_partials/footer');
			} else {
				$this->user_model->add_user();
				redirect('/');
			}

			
		}

		public function delete($id){
			$this->user_model->delete_user($id);
			redirect('/');
		}

		public function edit($id){

			$data['user'] = $this->user_model->get_users($id);

			if(empty($data['user'])){
				show_404();
			}

			$data['title'] = 'Edit User';

			$this->load->view('global_partials/header');
			$this->load->view('pages/edit', $data);
			$this->load->view('global_partials/footer');
		}

		public function update(){
			$this->user_model->update_post();
			
			redirect('/');
		}
	}
?>