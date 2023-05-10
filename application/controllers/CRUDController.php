<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CRUDController extends CI_Controller
{
	// echo "<pre>";print_r($data); die();
	public function create()
	{

		$this->load->model('crud_model');
		$data['product_details'] = $this->crud_model->createProduct($_POST);
		redirect('list');
	}

	public function list()
	{
		
		$this->load->model('crud_model');
		$data['product_details'] = $this->crud_model->getAllProducts();
		$this->load->view('list', $data);
	}

	public function update()
	{
		// $this->load->helper('url');
		// echo "<pre>";print_r($_POST); die();
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->load->model('crud_model');
			$data['singleProduct'] = $this->crud_model->updateModel($_POST);
			redirect('list');
		}
	}
	public function delete($id)
	{
		// echo "<pre>";print_r($id); die();
		$this->load->model('crud_model');
		$this->crud_model->deleteModel($id);
		redirect('list');
	}
}
