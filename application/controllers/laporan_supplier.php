<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan_supplier extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_supplier');
	}
	function index(){
		if($this->session->logged_in == FALSE){
			redirect('login');
		}else{
			if($this->session->level == 'Admin'){
				$x['data']=$this->m_supplier->show_supplier();
				$this->load->view("t_admin/header");
				$this->load->view("t_admin/navbar");
				$this->load->view("v_admin/v_laporansupplier",$x);
				$this->load->view("t_admin/footer");
			} else {
				redirect('beranda/c_beranda');
			}
		}
		
	}
	function search(){
		$keywoard = $this->input->post('keywoard');
		$x['data']=$this->m_supplier->search($keywoard);
		$this->load->view("t_admin/header");
		$this->load->view("t_admin/navbar");
		$this->load->view("v_admin/v_laporansupplierfilter",$x);
		$this->load->view("t_admin/footer");
	}
	function print_laporan(){
		if($this->session->logged_in == FALSE){
			redirect('login');
		}else{
			if($this->session->level == 'Admin'){
				$x['data']=$this->m_supplier->show_supplier();
				$this->load->view("t_admin/header");
				$this->load->view("v_laporan/v_printsupplier",$x);
			} else {
				redirect('beranda/c_beranda');
			}
		}
	}
	function print_laporanfilter(){
		if($this->session->logged_in == FALSE){
			redirect('login');
		}else{
			if($this->session->level == 'Admin'){
				$keywoard = $this->input->get('keywoard');
				$x['data']=$this->m_supplier->search($keywoard);
				$this->load->view("t_admin/header");
				$this->load->view("v_laporan/v_printsupplier",$x);
			} else {
				redirect('beranda/c_beranda');
			}
		}
	}
}
?>