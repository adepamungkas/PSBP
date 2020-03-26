<?php

class Informasi extends CI_Controller
{

  function __construct(){
   parent::__construct();
   $this->load->model('M_pendaftaran');
   $this->load->library('form_validation');

  function simpan()
  {
    $this->form_validation->set_rules('nm_lengkap', 'nama_lengkap', 'required');
    $this->form_validation->set_rules('nm_panggilan', 'nama_panggilan', 'required');
    $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
    $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required');
    $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
    $this->form_validation->set_rules('agama', 'agama', 'required');
    $this->form_validation->set_rules('anak_ke', 'anak_ke', 'required');
    $this->form_validation->set_rules('jml_sdr_kandung', 'jml_sdr_kandung', 'required');
    $this->form_validation->set_rules('jml_sdr_tiri', 'jml_sdr_tiri', 'required');
    $this->form_validation->set_rules('asal_sekolah', 'asal_sekolah', 'required');
    $this->form_validation->set_rules('alamat_sekolah_asal', 'alamat_sekolah_asal', 'required');
    $this->form_validation->set_rules('alamat_calon_siswa', 'alamat_calon_siswa', 'required');
    $this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'required');
    $this->form_validation->set_rules('pekerjaan_ayah', 'pekerjaan_ayah', 'required');
    $this->form_validation->set_rules('pendidikan_ayah', 'pendidikan_ayah', 'required');
    $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'required');
    $this->form_validation->set_rules('pekerjaan_ibu', 'pekerjaan_ibu', 'required');
    $this->form_validation->set_rules('pendidikan_ibu', 'pendidikan_ibu', 'required');
    $this->form_validation->set_rules('alamat_orangtua', 'alamat_orangtua', 'required');
    if ($this->form_validation->run()==false){
      $this->load->view('web/pendaftaran');
    }
    else {
      $data = array('nm_lengkap' => $this->input->post('nm_lengkap') ,
                    'nm_panggilan' => $this->input->post('nm_panggilan'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'agama' => $this->input->post('agama'),
                    'anak_ke' => $this->input->post('anak_ke'),
                    'jml_sdr_kandung' => $this->input->post('jml_sdr_kandung'),
                    'jml_sdr_tiri' => $this->input->post('jml_sdr_tiri'),
                    'asal_sekolah' => $this->input->post('asal_sekolah'),
                    'alamat_sekolah_asal' => $this->input->post('alamat_sekolah_asal'),
                    'alamat_calon_siswa' => $this->input->post('alamat_calon_siswa'),
                    'nama_ayah' => $this->input->post('nama_ayah'),
                    'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                    'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
                    'nama_ibu' => $this->input->post('nama_ibu'),
                    'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                    'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
                    'alamat_orangtua' => $this->input->post('alamat_orangtua'),
                    'status_terima' => $this->input->post('B'),
                    );

      $simpan=$this->M_pedaftaran->simpan_daftar($data);
      if ($simpan) {
        $this->session->set_userdata('sukses','<div class="alert alert-success"> Berhasil Disimpan</div>');
        redirect('web');
      }
      else {
        $data['error']="Gagal Proses";
        redirect('web/pendaftaran');
      }
    }
  }
}
}
 ?>
