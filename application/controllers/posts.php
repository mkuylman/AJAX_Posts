<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {
  
  public function index()
  {
  	$this->load->model('Post');
  	$data['posts'] = $this->Post->all();
    $this->load->view('posts/index', $data);
  }
  public function create() 
  {
  	$new_post = $this->input->post();
  	$this->load->model('Post');
  	$this->Post->create_post($new_post);
  	redirect("/");
  }
}

//end of main controller
