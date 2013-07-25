<?php

class Email extends CI_Controller{

	// function __construct()
	// {
	// 	// parent::CI_Controller();
	// 	// date_default_timezone_set("Europe/London");
	// }

	public function __construct(){

        parent::__construct();
        
        date_default_timezone_set("Europe/London");

	}

	function index(){

		$this->load->view('newsletter');

	}

	function send(){

		$this->load->library('form_validation');

		// field name, error message, validation rules
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('name', 'NAME', 'trim|required');

		if($this->form_validation->run() == FALSE){

			$this->load->view('newsletter');

		}
		else
		{
			// validation passed, now send the email
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			$this->load->library('email');

			$this->email->set_newline("\r\n");

			$this->email->from('richpett01@gmail.com', 'Richie Boy');
			$this->email->to($email);
			$this->email->subject('testing newsletter signup confirmation');
			$this->email->message('You\'ve finally now signed up to the newsletter :) smiley '.$name);

			// $config['base_url']
			$path = $this->config->item('server_root');
			$filepath = $path.'/attachments/newsletter.txt';
			$this->email->attach($filepath);

			if($this->email->send())
			{
				// echo "Your email was sent";
				$this->load->view('signup_confirmation');
			}
			else
			{
				echo "Email was NAAAT sent";
				show_error($this->email->print_debugger());
			} 

		}

	}
}