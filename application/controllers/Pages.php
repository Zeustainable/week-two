<?php
    class Pages extends MY_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->library('session');
            $this->load->model('Account_model');
        }
        
        // ================================ LANDING PAGE ================================ //

        public function View() {
            $data['PageTitle'] = 'Home';
            $this->render('pages', $data);
        }

        // ================================ LOGIN PAGE ================================ //

        public function Login() {
            $data['PageTitle'] = 'Login';
            $this->render('pages', $data);
        }

        // ================================ REGISTER PAGE ================================ //

        public function Register() {
            $data['PageTitle'] = 'Register';
            $this->render('pages', $data);
        }

        // ================================ PORTFOLIO PAGE ================================ //

        public function Portfolio() {
            $data['PageTitle'] = 'Portfolio';
            $this->render('pages', $data);
        }

        // ================================ LOGIN CONNECT TO MODEL ================================ //

        public function Account_login() {
            $user_input = $this->input->post();
            $status = $this->Account_model->user_login($user_input);

            if($status == true) {
                redirect('Access/Dashboard');
            } else {
                redirect('Pages/Login');
            }
        }

        // ================================ REGISTER CONNECT TO MODEL ================================ //

        public function Account_register() {
            $user_input = $this->input->post();
            $status = $this->Account_model->user_registration($user_input);

            if($status == true) {
                redirect('Pages/Login');
            } else {
                redirect('Pages/Register');
            }
        }
    }
?>