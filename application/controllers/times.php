<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Times extends CI_Controller {
  public function main()
  {
    $this->load->model('Time');
    $data['time'] = $this->Time->get_time();
    $this->load->view('welcomes/index', $data);
  }
}

//end of controller