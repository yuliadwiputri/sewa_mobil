<?php 
class Dashboard extends CI_Controller{
    public function index(){
        $data['mobil']=$this->sewa_model->get_data('mobil')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/dashboard',$data);
       $this->load->view('templates_customer/footer');
    }

    public function detail_mobil($id){
        $data['detail']=$this->sewa_model->get_id_mb($id);
        $this->load->view('templates_customer/header');
        $this->load->view('customer/detail_mobil',$data);
       $this->load->view('templates_customer/footer');
    }
} ?>