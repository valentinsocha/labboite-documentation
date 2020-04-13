<?php
	class Tool extends CI_Controller{
        public function toolinfo($slug = NULL){
            $data['tool_head'] = $this->tools_model->get_tool_head($slug);

            $this->load->view('templates/startfile');
            $this->load->view('templates/header');
            $this->load->view('tool/toolinfo', $data);
            $this->load->view('templates/endfile');
        }

        public function toolconsumables($slug = NULL){
            $data['tool_head'] = $this->tools_model->get_tool_head($slug);

            $this->load->view('templates/startfile');
            $this->load->view('templates/header');
            $this->load->view('tool/toolconsumables', $data);
            $this->load->view('templates/endfile');
        }

        public function toolhelp($slug = NULL){
            $data['tool_head'] = $this->tools_model->get_tool_head($slug);

            $this->load->view('templates/startfile');
            $this->load->view('templates/header');
            $this->load->view('tool/toolhelp', $data);
            $this->load->view('templates/endfile');
        }

        public function tooltips($slug = NULL){
            $data['tool_head'] = $this->tools_model->get_tool_head($slug);

            $this->load->view('templates/startfile');
            $this->load->view('templates/header');
            $this->load->view('tool/tooltips', $data);
            $this->load->view('templates/endfile');
        }

        public function toolnotice($slug = NULL){
            $data['tool_head'] = $this->tools_model->get_tool_head($slug);

            $this->load->view('templates/startfile');
            $this->load->view('templates/header');
            $this->load->view('tool/toolnotice', $data);
            $this->load->view('templates/endfile');
        }
    }
?>
