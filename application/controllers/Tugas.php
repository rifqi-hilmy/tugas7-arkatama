<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('angka_ke_romawi_helper');
		$this->load->helper('romawi_ke_angka_helper');
		$this->load->library('date_format');
	}

	function index()
	{
		$angka = 10;
		$romawi = angka_ke_romawi($angka);
		$angka_kembali = romawi_ke_angka($romawi);
		$tanggal = '2023-09-12';
		$tanggal_y_m_d = $this->date_format->tanggal_y_m_d($tanggal);
		$tanggal_d_M_y = $this->date_format->tanggal_d_M_y($tanggal);
		$data['angka_romawi'] = "$angka ⇒ $romawi";
		$data['romawi_angka'] = "$romawi ⇒ $angka_kembali";
		$data['tanggal_y_m_d'] = "Format 'y-m-d': $tanggal_y_m_d";
		$data['tanggal_d_M_y'] = "Format 'd M y': $tanggal_d_M_y";

		$this->load->view('tugas_view', $data);
	}
}
