<?php
	class Pages extends CI_Controller{
		public function home(){
			$this->load->view('templates/startfile');
			$this->load->view('pages/home');
			$this->load->view('templates/endfile');
		}

		public function changelog(){
			$this->load->view('templates/startfile');
			$this->load->view('templates/header');
			$this->load->view('pages/changelog');
			$this->load->view('templates/endfile');
		}

		public function legal(){
			$this->load->view('templates/startfile');
			$this->load->view('templates/header');
			$this->load->view('pages/legal');
			$this->load->view('templates/endfile');
		}
	}
?>