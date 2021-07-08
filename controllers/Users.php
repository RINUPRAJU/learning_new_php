<?php

class Users extends CI_Controller {

    function index() {
        $this->load->model('User_model');
        $users = $this->User_model->all();
        $data  = array();
        $data['users'] = $users;
        $this->load->view('list',$data);
    }

    function create() {

        $this->load->model('User_model');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        
        if($this->form_validation->run() == false) {
            $this->load->view('create');
        } else {
            //save record to database
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['created_at'] = date('Y-m-d');
            $this->User_model->create($formArray);
            $this->session->set_flashdata('success','Record added successfully!!!');
            redirect(base_url().'index.php/users/index');
        }

    }

    function edit($userId) {
        $this->load->model('User_model');
        $users = $this->User_model->getuser($userId);
        $data  = array();
        $data['users'] = $users;

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('edit',$data);
        } else {
            $formArray = array();
            $formArray['name']  = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $this->User_model->updateuser($userId,$formArray);
            $this->session->set_flashdata('success','Record updated successfully');
            redirect(base_url().'index.php/users/index');
        }
    }
    function delete($userId) {
        $this->load->model('User_model');
        $users = $this->User_model->getuser($userId);
        if (empty($users)) {
            $this->session->set_flashdata('failure','Record not found in Database!!');
            redirect(base_url().'index.php/users/index');
        }
        $this->User_model->deleteuser($userId);
        $this->session->set_flashdata('success','Record deleted successfully!!!');
        redirect(base_url().'index.php/users/index');
    }
}
?>