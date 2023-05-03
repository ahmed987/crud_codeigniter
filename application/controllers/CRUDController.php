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


	public function edit($id)
	{
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$this->load->model('crud_model');
			$data['singleProduct'] = $this->crud_model->getSingleProduct($id);
			$this->load->view('edit_view', $data);
		}
	}

	public function update()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->load->model('crud_model');
			$data['singleProduct'] = $this->crud_model->updateModel();
			// echo "<pre>";print_r($data); die();
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
