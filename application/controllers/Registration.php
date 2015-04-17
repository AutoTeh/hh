<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
 	public function __construct()
    {
    	parent::__construct();

  		If ($this->session->has_userdata('ID_Session')) {
            if (!verify_access($this->session->userdata('Id_Group'), $this->uri->uri_string())) ? redirect('/', 'refresh');
    	} Else {
            redirect('/', 'refresh');
    	}
    }


	public function index()
	{
		$this->load->view('reg');
	}

	public function reguser()
	{
		$data['title'] = "Регистрация пользователя";
        $data['page'] = 'reg/user';

		if !($this->uri->segment(3) === FALSE)
		{
				$this->form_validation->set_rules('login', 'Login', 'required|min_length[5]|max_length[12]');
				$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.Email_Users]');
		        $this->form_validation->set_rules('phone', 'Phone', 'required|is_unique[users.Phone_Users]');
		        $this->form_validation->set_rules('fio', 'FIO', 'required');

	        if ($this->form_validation->run() == TRUE)
	        {
	        	$pass = random_string('alnum', 6);
          		$query = array(
				        'Login_Users' => $this->input->post('login'),
				        'Email_Users' => $this->input->post('email'),
				        'Phone_Users' => $this->input->post('phone'),
				        'Pass_Users'  => $this->encrypt->sha1($pass),
				        'FIO_Users'   => $this->input->post('fio'),
				        'ID_Group'    => $this->config->item('id_group_start')
				);

				$this->db->insert('users', $query);

	        	$data['backpage'] = 'registration/reguser';
	        	$data['page'] = 'formsuccess';

	        }
		}

		$this->load->view('main', $data);
	}

	public function regpartner()
	{
		$data['Title'] = "Регистрация партнера";
        $data['page'] = 'reg/partner';

		if !($this->uri->segment(3) === FALSE)
		{
				$this->form_validation->set_rules('login', 'Login', 'required|min_length[5]|max_length[12]');
				$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.Email_Users]');
		        $this->form_validation->set_rules('phone', 'Phone', 'required|is_unique[users.Phone_Users]');
		        $this->form_validation->set_rules('fio', 'FIO', 'required');

	        if ($this->form_validation->run() == TRUE)
	        {
	        	$pass = random_string('alnum', 6);
          		$query = array(
				        'Login_Users' => $this->input->post('login'),
				        'Email_Users' => $this->input->post('email'),
				        'Phone_Users' => $this->input->post('phone'),
				        'Pass_Users'  => $this->encrypt->sha1($pass),
				        'FIO_Users'   => $this->input->post('fio'),
				        'ID_Group'    => $this->config->item('id_group_partner')
				);

				$this->db->insert('users', $query);

	        	$data['backpage'] = 'registration/regpartner';
	        	$data['page'] = 'formsuccess';

	        }
		}

		$this->load->view('main', $data);
	}

	public function regcompany()
	{
	    $data['title'] = "Регистрация компании";
        $data['page'] = 'reg/company';

		if !($this->uri->segment(3) === FALSE)
		{
				$this->form_validation->set_rules('login', 'Login', 'required|min_length[5]|max_length[12]');
				$this->form_validation->set_rules('inn', 'INN', 'required|min_length[5]|is_unique[company.INN_Company]');
				$this->form_validation->set_rules('address', 'Address', 'required');
				$this->form_validation->set_rules('uraddress', 'Uraddress', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.Email_Company]');
		        $this->form_validation->set_rules('phone', 'Phone', 'required|is_unique[users.Phone_Users]');
		        $this->form_validation->set_rules('fio', 'FIO', 'required');

	        if ($this->form_validation->run() == TRUE)
	        {
	        	$pass = random_string('alnum', 6);
          		$query = array(
				        'Login_Company' 	=> $this->input->post('login'),
				        'Email_Company' 	=> $this->input->post('email'),
				        'Uraddress_Company' => $this->input->post('uraddress'),
				        'Address_Company' 	=> $this->input->post('address'),
				        'INN_Company' 		=> $this->input->post('inn'),
				        'Phone_Company' 	=> $this->input->post('phone'),
				        'Pass_Company'  	=> $this->encrypt->sha1($pass),
				        'FIO_Company'  		=> $this->input->post('fio'),
				        'ID_Group'    		=> $this->config->item('id_group_company')
				);

				$this->db->insert('Company', $query);

	        	$data['backpage'] = 'registration/regcompany';
	        	$data['page'] = 'formsuccess';

	        }
		}

		$this->load->view('main', $data);
	}
}
