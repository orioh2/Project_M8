<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
       // $this->load->helper('url');
       $this->load->view('mycss');
       $this->load->view('news_view');
       // echo "News ทั้งหมด</br>";
    //echo "<a href='".site_url('newsdetail/4')."'> รายละเอียดข่าว</a>";
    }
    
}
