<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_products');
	}

	public function index()
	{
		$data['products'] = $this->model_products->all();
		$this->load->view('welcome_message', $data);
	}

	public function add_to_cart($product_id)
	{
		$product = $this->model_products->find($product_id);
		$data = array(
					        'id'      => $product->id,
					        'qty'     => 1,
					        'price'   => $product->price,
					        'name'    => $product->name
								);
		$this->cart->insert($data);
		redirect(base_url());
	}

	public function cart()
	{
		//print_r($this->cart->contents());
		$this->load->view('show_cart');
	}

	public function buy($product_id)
	{
		$product = $this->model_products->find($product_id);
		$data = array(
					        'id'      => $product->id,
					        'qty'     => 1,
					        'price'   => $product->price,
					        'name'    => $product->name
								);
		$this->cart->insert($data);
		$this->load->view('show_cart');
	}

	public function login (){
		$this->load->view('login/index');
	}

	public function clear_cart()
	{
		$this->cart->destroy();
		redirect(base_url());
	}


}