<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hi extends CI_Controller {

  // This is the function that CodeIgniter calls when a user accesses the route
  public function index() 
  {
    $this->load->view('hi'); // Load the hi view
  }
}