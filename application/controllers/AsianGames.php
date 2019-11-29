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
		$this->load->model('M_AsianGames');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('homepage');
	}
	
	public function registrasi()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');
		$this->form_validation->set_rules('idcardNum', 'IDCardNum', 'required|trim|is_unique[user.username]');
		$this->form_validation->set_rules('address', 'Address', 'required|trim');
		$this->form_validation->set_rules('gender', 'Gender', 'required|trim');
		$this->form_validation->set_rules('birthday', 'Birthday', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('signup');
		} else {
			$data = [
				'username' => $this->input->post('username', true),
				'password' => $this->input->post('password'),
				'id_card_number' => $this->input->post('idcardNum', true),
				'address' => $this->input->post('address', true),
				'gender' => $this->input->post('gender', true),
				'birth_day' => $this->input->post('birthday', true),
			];
			$table = 'user';
			$register = $this->M_AsianGames->Minsert($table, $data);
			if ($register ) {
				$this->session->set_flashdata('alert', 'registrasi_berhasil');
				redirect('AsianGames/index');
			}
		}
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
			echo "lalalalal";
			if ($password == $login['password']) {
				$data = [
					'username' => $login['username'],
				];
				$this->session->set_userdata($data);
				redirect('AsianGames/addCabor');
			} else {
				$this->session->set_flashdata('message', 'Gagal login: Cek password! ');
				redirect('AsianGames/login');
			}
		} else {
			$this->session->set_flashdata('message', 'Gagal login: Cek username! ');
			redirect('AsianGames/login');
		}
    }
    
    public function addCabor(){
		$this->form_validation->set_rules('idcabor', 'IDCabor', 'required|trim|is_unique[cabor.code_cabor]');
		$this->form_validation->set_rules('name', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('insertCabor');
		} else {
			$data = [
				'code_cabor' => $this->input->post('idcabor', true),
				'nama' => $this->input->post('name'),
				'jenis' => $this->input->post('jenis', true),
			];
			$table = 'cabor';
			$register = $this->M_AsianGames->Minsert($table, $data);
			if ($register) {
				$this->session->set_flashdata('alert', 'registrasi_berhasil');
				redirect('AsianGames/index');
			}
		}
	}
	
	public function addNegara(){
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim|is_unique[negara.nama_negara]');
		$this->form_validation->set_rules('total', 'Total', 'required|trim');
		$this->form_validation->set_rules('emas', 'Emas', 'required|trim');
		$this->form_validation->set_rules('perak', 'Perak', 'required|trim');
		$this->form_validation->set_rules('perunggu', 'Perunggu', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('insertNegara');
		} else {
			echo "asdasdasd";
			$data = [
				'nama_negara' => $this->input->post('nama', true),
				'emas' => $this->input->post('emas', true),
				'perak' => $this->input->post('perak', true),
				'perunggu' => $this->input->post('perunggu', true),
				'total' => $this->input->post('total', true),
			];
			$table = 'negara';
			$register = $this->M_AsianGames->Minsert($table, $data);
			if ($register) {
				$this->session->set_flashdata('alert', 'registrasi_berhasil');
				redirect('AsianGames/index');
			}
		}
	}

	public function addPertandingan(){
		$this->form_validation->set_rules('idpertandingan', 'IDpertandingan', 'required|trim|is_unique[pertandingan.id_pertandingan]');
		$this->form_validation->set_rules('fase', 'Fase', 'required|trim');
		$this->form_validation->set_rules('jadwal', 'Jadwal', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('insertPertandingan');
		} else {
			$data = [
				'id_pertandingan' => $this->input->post('idpertandingan', true),
				'jadwal' => $this->input->post('jadwal', true),
				'fase' => $this->input->post('fase', true),
			];
			$table = 'pertandingan';
			$register = $this->M_AsianGames->Minsert($table, $data);
			if ($register) {
				$this->session->set_flashdata('alert', 'registrasi_berhasil');
				redirect('AsianGames/index');
			}
		}
	}	
}
