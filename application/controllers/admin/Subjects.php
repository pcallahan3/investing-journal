<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller {


    public function index(){
        //Load the template
        $this->template->load('admin','default', 'subjects/index');
    }

    public function add(){

        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');

        if($this->form_validation->run() == FALSE){
            //Load template
            $this->template->load('admin','default', 'subjects/add');
        }
        else{
            //Create POST array
            $data = array(
                'name' => $this->input->post('name')
            );

            //Insert subjects
            $this->Subject_model->add($data);

            //Activity array
            $data =  array(
                'resource_id' => $this->db->insert_id(),
                'type'        => 'subject',
                'action'      => 'added',
                'user_id'     => '1',
                'message'     => 'A subject was added ('.$data["name"].')'
            );

            //Insert activities
            $this->Activity_model->add($data);

        }

    }

    public function edit(){
        //Load the template
        $this->template->load('admin','default', 'subjects/edit');
    }

    public function delete(){

    }
}