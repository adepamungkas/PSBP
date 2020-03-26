<?php

class M_pendaftaran extends CI_Model
{

  function simpan_daftar($data)
  {
    $this->db->insert($data);
    return $this->db->insert('pendaftar',$data);
  }

  public function edit_daftar($id)
  {
    return $this->db->get_where('pendaftar',['id'=>$id])->row_array();
  }

  public function update_daftar($id='',$data)
  {
    $this->db->where('id',$id);
    return $this->db->update('pendaftar',$data);
  }

  public function delete_daftar($id='')
  {
    $this->db->where('id',$id);
    return $this->db->delete('pendaftar');
  }
}


 ?>
