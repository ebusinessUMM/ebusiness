<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_products extends CI_Model {

  public $table = 'products';
  public $id = 'id';
  public $order = 'DESC';

  public function all()
  {
    //query semua record di table produk
    $hasil = $this->db->get('products');
    if ($hasil->num_rows() > 0) {
      return $hasil->result();
    } else {
      return array();
    }
  }

  public function find($id)
  {
    //query mencari record berdasarkan id-nya
    $hasil = $this->db->where('id', $id)
                      ->limit(1) //mencari record pada database
                      ->get('products');
    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }

  }

  public function create($data_products)
  {
    //query insert into
    $this->db->insert('products', $data_products);
  }

  public function update($id, $data_products)
  {
    //query update from ... where id = ...
    $this->db->where('id', $id)
             ->update('products', $data_products);
  }

  public function delete($id)
  {
    //query delete ...  where id = ...
    $this->db->where('id', $id)
             ->delete('products');
  }

  function get_all()
  {
      $this->db->order_by($this->id, $this->order);
      return $this->db->get($this->table)->result();
  }

}
