<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 主页类，首页渲染
 *
 * 主要用于主页的显示
 */
class Index extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->helper('url');
  }

  public function index(){
    $data['title'] = '首页 - 沙湖社区';

    $this->load->view('user/template/header' , $data);
    $this->load->view('user/index');
    $this->load->view('user/template/footer');
  }
}

?>
