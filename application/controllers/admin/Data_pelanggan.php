<?php
class Data_pelanggan extends CI_Controller
{
    public function index()
    {
      
        $data['customer'] = $this->sewa_model->get_data('customer')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_pelanggan', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_pelanggan()
    {
        $data['customer'] = $this->sewa_model->get_data('customer')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_pelanggan', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_data()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_pelanggan();
        } else {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $alamat = $this->input->post('alamat');
            $gender = $this->input->post('gender');
            $no_telepon = $this->input->post('no_telepon');
            $no_ktp = $this->input->post('no_ktp');
            $password = md5($this->input->post('password'));
           
            $data = array(
                'nama' => $nama,
                'username' => $username,
                'alamat' => $alamat,
                'gender' => $gender,
                'no_telepon' => $no_telepon,
                'no_ktp' => $no_ktp,
                'password' => $password,

            );
            $this->sewa_model->insert_data($data, 'customer');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           Data berhasil ditambahkan
           <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>');
             redirect('admin/data_pelanggan');
        }
    }

    public function update_pelanggan($id){
$where = array('id_customer'=> $id);
$data['customer']=$this->db->query("SELECT * FROM customer WHERE id_customer='$id'")->result();

$this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_pelanggan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_pelanggan_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->update_pelanggan();
        } else {
            
            $id = $this->input->post('id_customer');
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $alamat = $this->input->post('alamat');
            $gender = $this->input->post('gender');
            $no_telepon = $this->input->post('no_telepon');
            $no_ktp = $this->input->post('no_ktp');
            $password = md5($this->input->post('password'));
            $data = array(
                'nama' => $nama,
                'username' => $username,
                'alamat' => $alamat,
                'gender' => $gender,
                'no_telepon' => $no_telepon,
                'no_ktp' => $no_ktp,
                'password' => $password,
               
            );
            $where=array(
                'id_customer'=>$id
            );
            $this->sewa_model->update_data('customer',$data, $where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           Data berhasil Diupdate
           <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>');
             redirect('admin/data_pelanggan');
        }
    }

  
    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Kode Type', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('alamat', 'No Plat', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('no_telepon', 'no_telepon ', 'required');
        $this->form_validation->set_rules('no_ktp', 'no_ktp', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
    }
    

    public function delete_pelanggan($id){
        $where=array('id_customer'=>$id);
        $this->sewa_model->delete_data($where,'customer');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
       Data berhasil Dihapus
       <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>');
         redirect('admin/data_pelanggan');
    }
    }
