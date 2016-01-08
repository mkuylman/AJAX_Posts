<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Model {
  public function all() {
    return $this->db->query("SELECT * FROM posts")->result_array();
  }
  public function create_post($new_post)
  {
  	$query = "INSERT INTO posts (description) VALUES (?)";
  	$values = array($new_post['description']);
  	return $this->db->query($query, $values);
  }
}

