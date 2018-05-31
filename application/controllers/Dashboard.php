<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dashboard extends CI_Controller
	{
		public function index()
		{
			$data['title']='Marketing Integrated Systems';
			$data['menu']='dashboard';
			$data['menulist']='';
			$data['content']='menu/dashboard';
			$this->load->view('layout/wrapper',$data);
		}
	}
?>