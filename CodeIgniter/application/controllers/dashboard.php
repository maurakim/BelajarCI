<?php
defined('BASEPATH') OR exit('No direct
    script access allowed');

class Dashboard extends CI_Controller{

  public function index()
  {
    $data['konten']="aku";
    $this-> load ->view("template", $data);
  }
  public function kontak()
  {
    $data['konten']="kontak";
    $this-> load ->view("template", $data);
  }
  public function brand()
  {
    $data['konten']="brand";
    $this-> load ->view("template", $data);
  }
}

 ?>
