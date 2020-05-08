<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {
  function getUsernames(){

    $this->db->select('skill');
    $records = $this->db->get('skill');
    $users = $records->result_array();
    return $users;
  }
  function getUserDetails($postData=array()){
 
    $response = array();
 
    if(isset($postData['skill']) ){
 
      // Select record
      $this->db->select('*');
      $this->db->where('skill', $postData['skill']);
      $records = $this->db->get('skill');
      $response = $records->result_array();
 
    }
 
    return $response;
  }

}