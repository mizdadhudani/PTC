<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

  //Halaman login
  public function index()
  {
  $this->simple_login->logout();
  }
  public function user()
  {
  $this->simple_login->logout_user();
  }
}