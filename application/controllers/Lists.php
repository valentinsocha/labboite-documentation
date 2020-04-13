<?php
	class Lists extends CI_Controller{

        public function hardwarefolders(){

            $data['hard_folders'] = $this->folders_model->get_hard_folders();

            $this->load->view('templates/startfile');
            $this->load->view('templates/header');
            $this->load->view('lists/hardwarefolders', $data);
            $this->load->view('templates/endfile');
        }

        public function softwarefolders(){

            $data['soft_folders'] = $this->folders_model->get_soft_folders();

            $this->load->view('templates/startfile');
            $this->load->view('templates/header');
            $this->load->view('lists/softwarefolders', $data);
            $this->load->view('templates/endfile');
        }

        public function hardwareitems($slug = NULL){
            
            $data['hard_items'] = $this->folders_model->get_hard_items($slug);

            if(empty($data['hard_items'])){
                show_404();
            }

            $data['hard_title'] = $this->folders_model->get_hard_title($slug);

            $this->load->view('templates/startfile');
            $this->load->view('templates/header');
            $this->load->view('lists/hardwareitems', $data);
            $this->load->view('templates/endfile');
        }

        public function softwareitems($slug = NULL){
            
            $data['soft_items'] = $this->folders_model->get_soft_items($slug);

            if(empty($data['soft_items'])){
                show_404();
            }

            $data['soft_title'] = $this->folders_model->get_soft_title($slug);

            $this->load->view('templates/startfile');
            $this->load->view('templates/header');
            $this->load->view('lists/softwareitems', $data);
            $this->load->view('templates/endfile');
        }
    }
?>