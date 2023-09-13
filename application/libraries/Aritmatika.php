<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aritmatika {

    public function tambah($a, $b) {
		try {
			if (!is_numeric($a) || !is_numeric($b)) {
				throw new Exception('Variabel a dan b harus angka.');
			}
			return $a + $b;
		} catch (Exception $e) {
			return '';
		}
	}
	
	public function kurang($a, $b) {
		try {
			if (!is_numeric($a) || !is_numeric($b)) {
				throw new Exception('Variabel a dan b harus angka.');
			}
			return $a - $b;
		} catch (Exception $e) {
			return '';
		}
	}
	
	public function kali($a, $b) {
		try {
			if (!is_numeric($a) || !is_numeric($b)) {
				throw new Exception('Variabel a dan b harus angka.');
			}
			return $a * $b;
		} catch (Exception $e) {
			return '';
		}
	}
	
	public function bagi($a, $b) {
		try {
			if ($b == 0) {
				throw new Exception('Pembagian oleh nol tidak diizinkan.');
			}
	
			if (!is_numeric($a) || !is_numeric($b)) {
				throw new Exception('Variabel a dan b harus angka.');
			}
			return $a / $b;
		} catch (Exception $e) {
			return '';
		}
	}
	
}
