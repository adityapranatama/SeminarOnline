<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$x['data']=$this->M_seminar->showSeminar();
		$this->load->view('Template/header');
		$this->load->view('Template/test',$x);
		$this->load->view('Template/footer');
	}
}
