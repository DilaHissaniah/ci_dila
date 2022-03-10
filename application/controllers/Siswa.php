<?php

class siswa extends CI_Controller{
    function index(){}
    function tampil_data_siswa(){
        $this->load->model('M_siswa');
        $data ['siswa'] =$this->M_siswa->tampil_data()->result();
        $this->load->view('V_tampil_data_siswa',$data);
    }
    function tambah_data_siswa(){

        $this->load->view('Form_tambah_data_siswa') ;
    }
}