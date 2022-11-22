<?php 
class Data_Sewa extends CI_Controller{
    public function index(){
        $pengguna = $this->session->userdata('id_pengguna');
        $data['sewa']=$this->db->query("SELECT * FROM  sewa sw, mobil mb, pengguna cs WHERE sw.id_mobil=mb.id_mobil AND sw.id_pengguna=cs.id_pengguna AND cs.id_pengguna='$pengguna' ORDER BY id_sewa ASC")->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/data_sewa',$data);
        $this->load->view('templates_customer/footer');
    }

   
} ?>