<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_users extends CI_Model {

  public function check_credential()
  {
    $username = set_value('username');
    $password = set_value('password');

    $hasil = $this->db->where('username', $username)
                      ->where('password', $password)
                      ->limit(1) //Untuk menampilkan 1 isi tabel dengan di tambah kondisi where
                      ->get('users');

    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }

  }

}
