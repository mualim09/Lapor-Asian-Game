<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AsianGames extends CI_Controller
{

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('homepage');
    }
    
    public function login()
	{	
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		} else {
			$this->process_login();
		}
	}

	public function process_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$login = $this->db->get_where('user', ['username' => $username])->row_array();
		if ($login) {
			if (password_verify($password, $login['password'])) {
				$data = [
					'username' => $login['username'],
				];
				$this->session->set_userdata($data);
				redirect('AsianGames/viewcabor');
			} else {
				$this->session->set_flashdata('message', 'Gagal login: Cek password! ');
				redirect('AsianGames/login');
			}
		} else {
			$this->session->set_flashdata('message', 'Gagal login: Cek username! ');
			redirect('AsianGames/login');
		}
    }
    
    public function addAtlet(){
        $this->load->view('insertAtlet');
    }
}
