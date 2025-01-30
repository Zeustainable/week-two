<?php
    class MY_Controller extends CI_Controller {
        public function __construct() {
            parent::__construct();
            date_default_timezone_set('Asia/Manila');
        }

        public function render($view, $data = []) {
            if(!file_exists(APPPATH.'views/'.$view.'/'.$data['PageTitle'].'.php')) {
                show_404();
            }

            if ($view == 'pages') {
                $data['IsLoggedIn'] = false;
            } else {
                $data['IsLoggedIn'] = true;
            }   

            $data['base_url'] = base_url();

            $this->load->view('templates/Header',$data);
            $this->load->view($view.'/'.$data['PageTitle'], $data);
            $this->load->view('templates/Footer');
        }
    }
?>