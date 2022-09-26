<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paket_tour extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('mpaket');
        $this->load->model('mberita');
    }
	public function index()
	{
        $x['paket']=$this->mberita->paket_footer();
        $x['berita']=$this->mberita->berita_footer();
        $x['photo']=$this->mberita->get_photo();
		$jum=$this->mpaket->tampil_paket();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=3;
        $config['base_url'] = base_url() . 'paket_tour/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
             $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
			$config['next_link'] = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
		$x['news']=$this->mpaket->get_paket($offset,$limit);
        $x['brt']=$this->mpaket->tampil_paket();
		$this->load->view('front/v_paket',$x);
	}
	function detail_paket(){
        $x['paket']=$this->mberita->paket_footer();
        $x['berita']=$this->mberita->berita_footer();
        $x['photo']=$this->mberita->get_photo();
		$kode=$this->uri->segment(3);
		$x['brt']=$this->mpaket->tampil_paket();
		$x['news']=$this->mpaket->getpaket($kode);
		$this->load->view('front/v_detail_paket',$x);
	}

	function search_paket(){
 	$keyword = $this->input->post('keyword');
	$data['sorting']=$this->mpaket->get_paket_keyword($keyword);
	$data['paket']=$this->mberita->paket_footer();
	$data['brt']=$this->mpaket->tampil_paket();
	$this->load->view('front/search_paket',$data);
	}

    function pesan_paket(){
        $x['paket']=$this->mberita->paket_footer();
        $x['berita']=$this->mberita->berita_footer();
        $x['photo']=$this->mberita->get_photo();
        $kode=$this->uri->segment(3);
        $x['pkt']=$this->mpaket->getpaket($kode);
        $x['byr']=$this->mpaket->get_metode_pembayaran();
        $this->load->view('front/v_order',$x);
    }
    function order(){
        $x['paket']=$this->mberita->paket_footer();
        $x['berita']=$this->mberita->berita_footer();
        $x['photo']=$this->mberita->get_photo();
        error_reporting(0);
        $no_order=$this->mpaket->get_no_order();
        $nama=strip_tags(str_replace("'", "",$this->input->post('nama')));
        $jekel=strip_tags(str_replace("'", "",$this->input->post('jenkel')));
        $alamat=strip_tags(str_replace("'", "",$this->input->post('alamat')));
        $notelp=strip_tags(str_replace("'", "",$this->input->post('notelp')));
        $email=strip_tags(str_replace("'", "",$this->input->post('email')));
        $paket=strip_tags(str_replace("'", "",$this->input->post('paket')));
        $berangkat=$this->input->post('berangkat');
        $kembali=$this->input->post('kembali');
        $dewasa=$this->input->post('adultamt');
        $anak2=$this->input->post('childrenamt');
        $ket=mysql_real_escape_string($this->input->post('notebox'));
        $this->mpaket->simpan_order($no_order,$nama,$jekel,$alamat,$notelp,$email,$paket,$berangkat,$kembali,$dewasa,$anak2,$ket);
        $this->session->set_userdata('invoices',$no_order);
        $x['data']=$this->mpaket->get_metode();
        $this->load->view('front/v_metode_bayar',$x);
    }
    function set_pembayaran(){
        $x['paket']=$this->mberita->paket_footer();
        $x['berita']=$this->mberita->berita_footer();
        $x['photo']=$this->mberita->get_photo();
        $id=$this->uri->segment(3);
        $no_invoice=$this->session->userdata('invoices');
        $this->mpaket->set_bayar($no_invoice,$id);
        if($id=='1'){
            $x['data']=$this->mpaket->faktur();
            $x['judul']="Invoice";
            $this->load->view('front/v_invoices',$x);
        }else{
            $x['data']=$this->mpaket->faktur();
            $x['judul']="Invoice";
            $this->load->view('front/v_invoices_bank',$x);
        }
    }
}
