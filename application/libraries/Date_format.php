<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Date_format {

    public function tanggal_y_m_d($tanggal) {
        return date('Y-m-d', strtotime($tanggal));
    }

    public function tanggal_d_M_y($tanggal) {
        return date('d M Y', strtotime($tanggal));
    }
}
