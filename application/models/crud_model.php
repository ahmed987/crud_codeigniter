<?php

class crud_model extends CI_Model
{

    public function createProduct($data)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('price', 'Price', 'trim|integer|required');
            $this->form_validation->set_rules('quantity', 'Quantity', 'trim|required|integer');
            //  echo "<pre>";print_r($data); die();
            if ($this->form_validation->run() == FALSE) {

                $this->load->view('create', array('error' => validation_errors()));
            } else {

                return $this->db->insert('products', $data);
                $this->load->view('list');
            }
        } else {
            echo "<pre>";
            print_r('else');
            die();
        }
    }

    public function getAllProducts()
    {

        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('products');
        $data['records'] = $query->result();
        if ($data) {

            return $query->result();
        }
    }


    public function getSingleProduct($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('products');
        if ($query) {
            return $query->row();
        }
    }
    public function updateModel()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price', 'Price', 'trim|integer|required');
        $this->form_validation->set_rules('quantity', 'Quantity', 'trim|required|integer');
        //  echo "<pre>";print_r($data); die();
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('create', array('error' => validation_errors()));
        } else {

            $this->name  = $_POST['name'];
            $this->price  = $_POST['price'];
            $this->quantity  = $_POST['quantity'];

            $this->db->update('products', $this, array('id' => decrypt($_POST['id'])));
        }
        // echo "<pre>";print_r($_POST); die();
    }
    public function deleteModel($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('products');
    }
}
