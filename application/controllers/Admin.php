<?php

class Admin extends CI_Controller{
 
 function index(){
     echo "selamat datang";
    }
 function user(){
    $this->load->view('V_user');
    }
 function petugas(){
     $this->load->view('P_petugas');
    }
 function pegawai(){
     $this->load->view('P_pegawai');
    }
 function pemilik(){
    $this->load->view('P_pemilik');
 
    }
 function pembeli(){
    $this->load->view('P_pembeli');
 
    }
    function biodata($nama,$alamat,$no_hp,$email,$sekolah){
       $data = [
          'nama'      => $nama,
          'alamat'    => $alamat,
          'no_hp'     => $no_hp,
          'email'     => $email,
          'sekolah'   => $sekolah,
          
         
       ];
      $this->load->view('B_biodata', $data) ;
      }  
      function tambah_data(){

         $this->load->view('Form_tambah_data') ;
      }
      function action_tambah_data(){
         
         $data['nama']           =$this->input->post('namaa');
         $data['alamat']         =$this->input->post('alamatt');
         $data['no_hp']          =$this->input->post('no_hp');
         $data['email']          =$this->input->post('emaill');
         $data['sekolah']        =$this->input->post('sekolahh');
         $data['tempat_lahir']   =$this->input->post('tmpt_lhr');
         $data['tanggal_lahir']  =$this->input->post('tgl_lhr');
         $data['jenis_kelamin']  =$this->input->post('jenis_kelamin');
         $data['hobi']           =$this->input->post('hobi');
         $data['status']         =$this->input->post('status');
         $data['upload_foto']    =$this->input->post('upload_foto');
         
         $this->load->view('B_biodata', $data) ;
      }
      function tampil_data(){
         $this->load->model('M_profile');
         $data ['profile'] =$this->M_profile->tampil_data()->result();
         $this->load->view('V_tampil_data_profile',$data);
      }
      function tambah_data_profile(){

         $this->load->view('Form_tambah_data_profile') ;
      }
      function action_tambah_data_profile(){
         $add =[
            'nama_depan'         =>$this->input->post('nama_depan'),
            'nama_belakang'      =>$this->input->post('nama_belakang'),
            'tempat_lahir'       =>$this->input->post('tempat_lahir'),
            'tanggal_lahir'      =>$this->input->post('tanggal_lahir'),
            'jenis_kelamin'      =>$this->input->post('jenis_kelamin'),
            'alamat'             =>$this->input->post('alamat'),
            'jenjang_pendidikan' =>$this->input->post('jenjang_pendidikan'),
            
         ];
         $this->db->insert('tbl_profile',$add);
         redirect('../Admin/tampil_data');
        
      }
      function update_data($id){
         $this->load->model('M_profile');
         $data['profile'] =$this->M_profile->get_data_by_id($id)->row_array();
         $this->load->view('update_data_profile',$data);
      }
      function action_update_data_profile(){
         $id=$this->input->post('id');
         $update =[
            'nama_depan'         =>$this->input->post('nama_depan'),
            'nama_belakang'      =>$this->input->post('nama_belakang'),
            'tempat_lahir'       =>$this->input->post('tempat_lahir'),
            'tanggal_lahir'      =>$this->input->post('tanggal_lahir'),
            'jenis_kelamin'      =>$this->input->post('jenis_kelamin'),
            'alamat'             =>$this->input->post('alamat'),
            'jenjang_pendidikan' =>$this->input->post('jenjang_pendidikan'),
         ];
         $update =$this->db->update('tbl_profile',$update,['id'=>$id]);
         redirect('../Admin/tampil_data');  
      }
      function hapus_data($id){
         $id =$id;
         $this->db->delete('tbl_profile',['id'=>$id]);
         redirect('../Admin/tampil_data');
      }
}
?>