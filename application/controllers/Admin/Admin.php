<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function Dashboard()
	{
		$this->load->view('Admin/Template/header');
		$this->load->view('Admin/Template/dashboard');
		$this->load->view('Admin/Template/footer');	
	}

	public function indexSeminar()
	{
		$this->load->view('Admin/Template/header');
		$this->load->view('Admin/Template/index');
		$this->load->view('Admin/Template/footer');
	}

	public function createSeminar()
	{
			$config['upload_path'] = './assets/images/uploadSeminar/'; //path folder
            $config['allowed_types'] = '*'; //type yang dapat diakses bisa anda sesuaikan
              // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

              $this->upload->initialize($config);
              if(!empty($_FILES['filefoto']['name'])){
                if ($this->upload->do_upload('filefoto')){
                  $gbr = $this->upload->data();
                  //Compress Image
                  $config['image_library']='gd2';
                  $config['source_image']='./assets/images/uploadSeminar/'.$gbr['file_name'];
                  $config['create_thumb']= FALSE;
                  $config['maintain_ratio']= FALSE;
                  $config['quality']= '60%';
                  $config['width']= 710;
                  $config['height']= 420;
                  $config['new_image']= './assets/images/uploadSeminar/'.$gbr['file_name'];
                  $this->load->library('image_lib', $config);
                  $this->image_lib->resize();
                  $gambar=$gbr['file_name'];

                  $nama_seminar = $this->input->post('nama_seminar');
                  $tanggal_seminar = $this->input->post('tanggal_seminar');
                  $waktu_seminar = $this->input->post('waktu_seminar');
                  $alamat = $this->input->post('alamat');
                  $harga = $this->input->post('harga');

		$this->M_seminar->inputseminar($nama_seminar,$tanggal_seminar,$waktu_seminar,$alamat,$harga,$gambar);
		redirect('Admin/Admin/indexSeminar');
		 }else{
           redirect('Admin/Admin/indexSeminar');
              }
         }
	}

	public function kelolaSeminar()
	{
		$x['data']=$this->M_seminar->showSeminar();
		$this->load->view('Admin/Template/header');
		$this->load->view('Admin/Template/kelolaSeminar',$x);
		$this->load->view('Admin/Template/footer');
	}
}
