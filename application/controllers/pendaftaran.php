<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
	function __construct(){
        parent::__construct();
        
        $this->load->model('mberita');
				$this->load->library('upload');
				 $this->load->library('form_validation');
    }
	public function index()
	{
        $x['paket']=$this->mberita->paket_footer();
        $x['berita']=$this->mberita->berita_footer();
        $x['photo']=$this->mberita->get_photo();

		$this->load->view('front/v_pendaftaran',$x);
}

	function kirim_pesan(){
	    $this->form_validation->set_rules('username' , 'User name' , 'required|trim|is_unique[customer.username]');
	    $this->form_validation->set_rules('email' , 'email' , 'required|trim|is_unique[customer.email]');
       
	    $password=str_replace("'", "", $this->input->post('xpaket',TRUE));
        
        $kontak=str_replace("'", "", $this->input->post('xkontak',TRUE));
        $kelamin=str_replace("'", "", $this->input->post('xkelamin',TRUE));  
        $alamat=str_replace("'", "", $this->input->post('xalamat',TRUE));
				
				if($this->form_validation->run() == false){
		echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>Maaf Anda Gagal Mendaftar, nama dan email anda sudah terdaftar</div>');
        redirect('pendaftaran');
        }else{
		
		$data = [
               
                'idc'=>"",
                'username' => htmlspecialchars($this->input->post('username', true)),
                'paket'=>  htmlspecialchars($password),
				'email'=> htmlspecialchars($this->input->post('email', true)),
				'kontak'=>htmlspecialchars($kontak),
				'kelamin'=>htmlspecialchars($kelamin),
				'alamat'=>htmlspecialchars($alamat)
				
            ];
        $this->db->insert('customer' , $data);
        
        echo $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Terima kasih, anda telah berhasil mendaftar</div>');
        redirect('pendaftaran');
        }
        
            
    }
    
}
