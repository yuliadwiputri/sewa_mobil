<?php 
class data_penyewaan extends CI_Controller{
    public function index(){
        $data['sewa']=$this->db->query("SELECT * FROM  sewa sw, mobil mb, pengguna cs WHERE sw.id_mobil=mb.id_mobil AND sw.id_pengguna=cs.id_pengguna")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_penyewaan',$data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_penyewaan()
    {
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_penyewaan');
        $this->load->view('templates_admin/footer');
    }

    public function tambah_penyewaan_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_penyewaan();
        } else {
            $id_pengguna = $this->input->post('id_pengguna');
            $id_mobil = $this->input->post('id_mobil');
            $tanggal_sewa = $this->input->post('tanggal_sewa');
            $tanggal_kembali = $this->input->post('tanggal_kembali');
            $harga = $this->input->post('harga');
            $denda = $this->input->post('denda');
            $tanggal_pengembalian = $this->input->post('tanggal_pengembalian');
            $status_pengembalian = $this->input->post('status_pengembalian');
            $status_sewa = $this->input->post('status_sewa');
            $data = array(
                'id_pengguna' => $id_pengguna,
                'id_mobil' => $id_mobil,
                'tanggal_sewa' => $tanggal_sewa,
                'tanggal_kembali' => $tanggal_kembali,
                'harga' => $harga,
                'denda' => $denda,
                'tanggal_pengembalian' => $tanggal_pengembalian,
                'status_pengembalian' => $status_pengembalian,
                'status_sewa' => $status_sewa,
                

            );
            $this->sewa_model->insert_data($data, 'sewa');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           Data berhasil ditambahkan
           <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>');
             redirect('admin/data_penyewaan');
        }
    }


    public function update_penyewaan($id){
        $where = array('id_sewa'=> $id);
        $data['sewa']=$this->db->query("SELECT * FROM sewa WHERE id_sewa='$id'")->result();
        $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('admin/form_update_penyewaan', $data);
                $this->load->view('templates_admin/footer');
            }
        
            public function update_penyewaan_aksi()
            {
                $this->_rules();
                if ($this->form_validation->run() == FALSE) {
                    $this->update_penyewaan();
                } else {
                    
                    $id = $this->input->post('id_sewa');
                    $id_pengguna = $this->input->post('id_pengguna');
                    $id_mobil = $this->input->post('id_mobil');
                    $tanggal_sewa = $this->input->post('tanggal_sewa');
                    $tanggal_kembali = $this->input->post('tanggal_kembali');
                    $harga = $this->input->post('harga');
                    $denda = $this->input->post('denda');
                    $tanggal_pengembalian = $this->input->post('tanggal_pengembalian');
                    $status_pengembalian = $this->input->post('status_pengembalian');
                    $status_sewa = $this->input->post('status_sewa');
                   
                    $data = array(
                        'id_pengguna' => $id_pengguna,
                        'id_mobil' => $id_mobil,
                        'tanggal_sewa' => $tanggal_sewa,
                        'tanggal_kembali' => $tanggal_kembali,
                        'harga' => $harga,
                        'denda' => $denda,
                        'tanggal_pengembalian' => $tanggal_pengembalian,
                        'status_pengembalian' => $status_pengembalian,
                        'status_sewa' => $status_sewa,
                       
                    );
                    $where=array(
                        'id_sewa'=>$id
                    );
                    $this->sewa_model->update_data('sewa',$data, $where);
                    $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                   Data berhasil Diupdate
                   <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>');
                     redirect('admin/data_penyewaan');
                }
            }
    
            public function _rules()
            {
                $this->form_validation->set_rules('id_pengguna', 'ID Pengguna', 'required');
                $this->form_validation->set_rules('id_mobil', 'ID Mobil', 'required');
                $this->form_validation->set_rules('tanggal_sewa', 'Tanggal Sewa', 'required');
                $this->form_validation->set_rules('tanggal_kembali', 'Tanggal Kembali', 'required');
                $this->form_validation->set_rules('harga', 'Harga Sewa/Hari', 'required');
                $this->form_validation->set_rules('denda', 'Denda/Hari', 'required');
                $this->form_validation->set_rules('tanggal_pengembalian', 'Tanggal Pengembalian', 'required');
                $this->form_validation->set_rules('status_pengembalian', 'Status Pengembalian', 'required');
                $this->form_validation->set_rules('status_sewa', 'Status Sewa', 'required');


            }
            public function delete_penyewaan($id){
                $where=array('id_sewa'=>$id);
                $this->sewa_model->delete_data($where,'sewa');
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
               Data berhasil Dihapus
               <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>');
                 redirect('admin/data_penyewaan');
            }
} ?>