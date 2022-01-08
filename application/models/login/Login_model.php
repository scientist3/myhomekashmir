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
}
