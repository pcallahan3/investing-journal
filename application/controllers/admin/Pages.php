<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {


    public function index()
    {
        //Load the template
        $this->template->load('admin','default', 'dashboard');
    }
}