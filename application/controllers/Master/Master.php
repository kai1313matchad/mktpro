<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Master extends CI_Controller
	{
		//Menu Master Start
		public function master_bb_type()
		{
			$data['title']='Marketing Integrated Systems';
			$data['menu']='master';
			$data['menulist']='bb_type';
			$data['content']='menu/master/master_bbtype';
			$this->load->view('layout/wrapper',$data);
		}

		public function master_location_code()
		{
			$data['title']='Marketing Integrated Systems';
			$data['menu']='master';
			$data['menulist']='location_code';
			$data['content']='menu/master/master_loccode';
			$this->load->view('layout/wrapper',$data);
		}
		//Menu Master End
	}
?>