<?php
class Data_pengguna extends CI_Controller
{
    public function index()
    {
      
        $data['pengguna'] = $this->sewa_model->get_data('pengguna')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_pengguna', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_pengguna()
    {
        $data['pengguna'] = $this->sewa_model->get_data('pengguna')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_pengguna', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_data()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_pengguna();
        } else {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $alamat = $this->input->post('alamat');
            $gender = $this->input->post('gender');
            $no_telepon = $this->input->post('no_telepon');
            $no_ktp = $this->input->post('no_ktp');
            $password = md5($this->input->post('password'));
            $role_id = $this->input->post('role_id');
            $data = array(
                'nama' => $nama,
                'username' => $username,
                'alamat' => $alamat,
                'gender' => $gender,
                'no_telepon' => $no_telepon,
                'no_ktp' => $no_ktp,
                'password' => $password,
                'role_id' => $role_id,

            );
            $this->sewa_model->insert_data($data, 'pengguna');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           Data berhasil ditambahkan
           <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>');
             redirect('admin/data_pengguna');
        }
    }

    public function update_pengguna($id){
        $where = array('id_pengguna'=> $id);
        $data['pengguna']=$this->db->query("SELECT * FROM pengguna WHERE id_pengguna='$id'")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_pengguna', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_pengguna_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->update_pengguna();
        } else {
            
            $id = $this->input->post('id_pengguna');
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $alamat = $this->input->post('alamat');
            $gender = $this->input->post('gender');
            $no_telepon = $this->input->post('no_telepon');
            $no_ktp = $this->input->post('no_ktp');
            $password = md5($this->input->post('password'));
            $role_id = $this->input->post('role_id');
            $data = array(
                'nama' => $nama,
                'username' => $username,
                'alamat' => $alamat,
                'gender' => $gender,
                'no_telepon' => $no_telepon,
                'no_ktp' => $no_ktp,
                'password' => $password,
                'role_id' => $role_id,
            );
            $where=array(
                'id_pengguna'=>$id
            );
            $this->sewa_model->update_data('pengguna',$data, $where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           Data berhasil Diupdate
           <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>');
             redirect('admin/data_pengguna');
        }
    }

  
    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Kode Type', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('alamat', 'No Plat', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('no_telepon', 'No Telepon ', 'required');
        $this->form_validation->set_rules('no_ktp', 'No KTP', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('role_id', 'role ID', 'required');
    }
    

    public function delete_pengguna($id){
        $where=array('id_pengguna'=>$id);
        $this->sewa_model->delete_data($where,'pengguna');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
       Data berhasil Dihapus
       <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>');
         redirect('admin/data_pengguna');
    }
    }
