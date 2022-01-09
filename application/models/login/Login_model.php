<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
  public function checkuser($data = [])
  {
    if (empty($data['email']) || empty($data['psd'])) {
      return false;
    } else {
      if ($data['email'] == 'user' && $data['psd'] == '1234') {
        return true;
      } else {
        return false;
      }
    }
  }

  public function getAllUsers()
  {
    return $this->db->select('*')->from('user_tbl')->get()->result();
  }

  public function insert($data = [])
  {
    return $this->db->insert('user_tbl', $data);
  }
}
