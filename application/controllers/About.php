<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    // public function __construct(){
    //     parent::__construct();
    //     //echo "About Construct";
    //     //เอาไว้เช็คก่อนเสมอ เช่น check login
    // }

	public function index()
	{
        echo "About Page Index";
        //Load model ออกมา model('ชื่อModel')
        $this->load->model('M8_model');
        $this->load->database();

        $result = $this->M8_model->get_lists();

        echo "<br><Br><br>"
        echo $result[0]["username"];
        //print_r($result);
    }
    
    public function social()
    {
        //echo "About Page Social";
        $data['name'] = "Thirapat";
        $data['user'] = "Orioh";

        $this->load->view('about_social',$data);
    }
}
