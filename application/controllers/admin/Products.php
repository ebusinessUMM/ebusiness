<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('group') != '1') {
      $this->session->set_flashdata('error','Maaf, Silahkan login terlebih dahulu!');
      redirect('login');
    }

    $this->load->model('model_products');
  }

	public function index()
	{
    $data['products']  = $this->model_products->all();
		$this->load->view('backend/view_all_products', $data);
	}

  public function create()
  {
    $this->form_validation->set_rules('name', 'Product Name', 'required');
    $this->form_validation->set_rules('description', 'Product Desciprtion', 'required');
    $this->form_validation->set_rules('price', 'Product Price', 'required|integer');
    $this->form_validation->set_rules('stock', 'Available Stock', 'required|integer');
    //$this->form_validation->set_rules('userfile', 'Product Image', 'required');

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('backend/view_all_products');
    } else {
      $config['upload_path']          = './uploads/';
      $config['allowed_types']        = 'jpg|png|jpeg';
      $config['max_size']             = 300; 
      $config['max_width']            = 2000; 
      $config['max_height']           = 2000; 

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload()){
        $this->load->view('backend/view_all_products');
      } else {
          $gambar = $this->upload->data();
          $data_product = array(
              'name'          => set_value('name') ,
              'description'   => set_value('description'),
              'price'         => set_value('price'),
              'stock'         => set_value('stock'),
              'image'         => $gambar['file_name']
            );
            $this->model_products->create($data_product);
            redirect('admin/products');
        }
      }
  }

  public function update($id)
  {
    $this->form_validation->set_rules('name', 'Product Name', 'required');
    $this->form_validation->set_rules('description', 'Product Desciprtion', 'required');
    $this->form_validation->set_rules('price', 'Product Price', 'required|integer');
    $this->form_validation->set_rules('stock', 'Available Stock', 'required|integer');

    if ($this->form_validation->run() == FALSE)
    {
      $data['product'] = $this->model_products->find($id);
      $this->load->view('backend/form_edit_product', $data);
    } else {
        $data_product = array(
            'name'          => set_value('name') ,
            'description'   => set_value('description'),
            'price'         => set_value('price'),
            'stock'         => set_value('stock')
        );
        $this->model_products->update($id, $data_product);
        redirect('admin/products');
    }
  }

  public function delete($id)
  {
    $this->model_products->delete($id);
    redirect('admin/products');
  }

  //Report
    public function pdf()
    {
			//$hasil = $this->db->query("SELECT * from products");
			$hasil = $this->db->get('products');
			$this->load->library('fpdf');
			date_default_timezone_set('Asia/Jakarta');
			$this->fpdf->FPDF("P","cm","A4");
			//$this->fpdf->FPDF("P","cm",array(9.5,13.5));
			$this->fpdf->SetMargins(1.0,0.5,0.5,0.5);
			$this->fpdf->AliasNbPages();
			$this->fpdf->AddPage();
			$this->fpdf->SetFont('Times','B',12);
			$this->fpdf->Cell(19,1.0,'Data Barang bulan Mei 2017',0,0,'C');
			$this->fpdf->Ln();
			$this->fpdf->Ln();
			$this->fpdf->SetFont('Times','',12);
			$this->fpdf->Cell(1 , 1, 'No' , 1, 'LR', 'C');
			$this->fpdf->Cell(5 , 1, 'Nama Produk' , 1, 'LR', 'C');
			$this->fpdf->Cell(9 , 1, 'Deskripsi Produk' , 1, 'LR', 'C');
			$this->fpdf->Cell(2 , 1, 'Harga' , 1, 'LR', 'C');
			$this->fpdf->Cell(2 , 1, 'Stock' , 1, 'LR', 'C');
			$nomor = 1;
			foreach($hasil->result() as $data){
				$this->fpdf->Ln();
				$this->fpdf->Cell(1 , 0.7, $nomor , 1, 'LR', 'C');
				$this->fpdf->Cell(5 , 0.7, $data->name , 1, 'LR', 'C');
				$this->fpdf->Cell(9 , 0.7, $data->description , 1, 'LR', 'C');
				$this->fpdf->Cell(2 , 0.7, $data->price , 1, 'LR', 'C');
				$this->fpdf->Cell(2 , 0.7, $data->stock , 1, 'LR', 'C');
			$nomor++;
			}

			$this->fpdf->Output("produk.pdf","I");
    }

}
