<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorial extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('prime_helper');
		$this->load->library('aritmatika');
		$this->load->helper('romawi_helper');
	}

	public function index()
	{
		// $number = 32;
		// $check = isPrimeNumber($number);
		// $data['result'] = $check ? $number . ' is Prime number' : $number . ' is not Prime number';
        // $this->load->view('tutorial', $data);

		$a = 2;
		$b = 5;

		$data['result'] = $a . ' + ' . $b . ' = ' . $this->aritmatika->tambah($a, $b);

        $this->load->view('aritmatika_view', $data);

	}
}
