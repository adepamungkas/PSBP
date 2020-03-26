<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

	}

	public function index()
	{
		$data['judul']="Utama";
		$this->load->view('pendaftar/v_header',$data);
		$this->load->view('pendaftar/v_slider',$data);
		$this->load->view('pendaftar/v_index',$data);
		$this->load->view('pendaftar/v_footer',$data);
	}

	public function profil()
	{
		$data['judul']="Profil";
		$this->load->view('pendaftar/v_header',$data);
		$this->load->view('pendaftar/v_profil',$data);
		$this->load->view('pendaftar/v_footer',$data);
	}

	public function bantuan()
	{
		$data['judul']="Bantuan";
		$this->load->view('pendaftar/v_header',$data);
		$this->load->view('pendaftar/v_bantuan',$data);
		$this->load->view('pendaftar/v_footer',$data);
	}

	public function kontak()
	{
		$data['judul']="Kontak";
		$this->load->view('pendaftar/v_header',$data);
		$this->load->view('pendaftar/v_kontak',$data);
		$this->load->view('pendaftar/v_footer',$data);
	}

	public function informasi()
	{
		$data['judul']="Informasi";
		$this->load->view('pendaftar/v_header',$data);
		$this->load->view('pendaftar/v_informasi',$data);
		$this->load->view('pendaftar/v_footer',$data);
	}

	public function pendaftaran()
	{
		$data['judul']="Informasi";
		$this->load->view('pendaftar/v_header',$data);
		$this->load->view('pendaftar/v_pendaftaran',$data);
		$this->load->view('pendaftar/v_footer',$data);
	}
}
