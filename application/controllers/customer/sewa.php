<?php 
class sewa extends CI_Controller{
    public function tambah_sewa($id){
        $data['detail'] = $this->sewa_model->get_id_mb($id);
        $this->load->view('templates_customer/header');
        $this->load->view('customer/tambah_sewa',$data);
       $this->load->view('templates_customer/footer');
    }

    public function tambah_sewa_aksi(){
      
        $id_pengguna = $this->session->userdata('id_pengguna');
        $id_mobil    = $this->input->post('id_mobil');
        $tanggal_sewa  = $this->input->post('tanggal_sewa');
        $tanggal_kembali = $this->input->post('tanggal_kembali');
        $denda       = $this->input->post('denda');
        $harga       = $this->input->post('harga');

        $data = array(
            'id_pengguna'    => $id_pengguna,
            'id_mobil'    => $id_mobil,
            'tanggal_sewa'  => $tanggal_sewa,
            'tanggal_kembali' => $tanggal_kembali,
            'denda'       => $denda,
            'harga'       => $harga,
            'tanggal_pengembalian'    => '-',
            'status_sewa'       => 'Belum Selesai',
            'status_pengembalian' => 'Belum Kembali',
        );

        $this->sewa_model->insert_data($data,'sewa');

        $status = array(
          'status' => '0'
        );
        $id = array(
          'id_mobil' => $id_mobil
        );

        $this->sewa_model->update_data('mobil', $status, $id);
        $this->session->set_flashdata('pesan' ,'<div class="alert alert-success alert-dismissible fade show" role="alert">
            Mobil berhasil disewa.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect ('customer/data_mobil');
    }

    
} ?>