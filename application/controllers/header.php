<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Header extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
					$this->load->database();
					$this->load->library("ion_auth");
					if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
					{
						redirect('auth', 'refresh');
					}
        }

	public function index()
	{
		$this->load->view('templates/header');
	}

	public function loginpage()
	{
		$this->load->view('templates/loginpage');
	}

}
