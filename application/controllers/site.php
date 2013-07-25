<?php

class Site extends CI_Controller{

	function __construct(){

		parent::__construct();
		// check if logged in
		$this->is_logged_in();
	}

	function index(){

		// now auto loaded
		// $this->load->model('data_model');
		$data = array();

		if($query = $this->data_model->getAll())
		{
			$data['records'] = $query;
		}

		// $this->load->view('home', $data);
		$this->load->view('options_view', $data);
	}

	function create(){
		$data = array(
			'title' => $this->input->post('title'),
			'contents' => $this->input->post('content')
		);

		$this->data_model->add_record($data);
		$this->index(); 
	}

	function delete(){
		$this->data_model->delete_row();
		$this->index();
	}

	function update(){
		$data = array(
			'title' => 'My Freshly Updated Title',
			'contents' => 'My brand new content'
		);

		$this->data_model->update_record($data);

		$this->index();
	}

	function members_area(){

		$this->load->view('members_area');

	}

	function is_logged_in(){

		// set when user registered
		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in != TRUE){
			// should load a view
			echo "you dont have permission to access this page <a href='../login'>login</a>";
			die();
		}

	}
} 

