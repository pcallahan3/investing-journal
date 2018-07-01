<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {


    public function index(){
        //Load the template
        $this->template->load('admin','default', 'pages/index');
    }

    public function add(){
        //Load the template
        $this->template->load('admin','default', 'pages/add');
    }

    public function edit(){
        //Load the template
        $this->template->load('admin','default', 'pages/edit');
    }

    public function delete(){

    }
}