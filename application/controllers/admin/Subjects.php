<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller {


    public function index(){
        //Load the template
        $this->template->load('admin','default', 'subjects/index');
    }

    public function add(){
        //Load the template
        $this->template->load('admin','default', 'subjects/add');
    }

    public function edit(){
        //Load the template
        $this->template->load('admin','default', 'subjects/edit');
    }

    public function delete(){

    }
}