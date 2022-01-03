<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome_model extends CI_Model
{
  public function getData()
  {
    return ('10 days');
  }

  public function getComplexData()
  {
    $data = [
      'name'  => 'Faizan',
      'age'   => 20,
      'phone' => '7006939042'
    ];

    return $data;
  }
}
