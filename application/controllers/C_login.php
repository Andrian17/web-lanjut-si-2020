<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function index()
	{
		
		$this->load->view('v_login');
	}

	public function prosesLogin(){
		$this->load->model('m_login');
		$user = $this->input->post('t_uname');
		$password = md5($this->input->post('t_password'));

		$cek = $this->m_login->cekLogin($user, $password);

		if ($cek->num_rows() > 0) {
			//jika sesuai maka data akan diambil
			$isi = $cek->row_object();
			$dataSession = [
				'namaPengguna' => $isi->NamaLengkap,
				'hakPengguna' => $isi->HakAkses
			];

			$this->session->set_userdata($dataSession);
			redirect('Mahasiswa/index');
		}else{
			$this->session->set_flashdata('pesan', 'USERNAME DAN password tidak valid');
			redirect('C_login/index','refresh');
		}


	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('C_login/index');
	}

}

/* End of file C_login.php */
/* Location: ./application/controllers/C_login.php */

?>
