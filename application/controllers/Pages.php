<?php
    class Pages extends MY_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('Account_model');
        }
        
        public function view() {
            $page = "home";
            $data['PageTitle'] = 'Home';
            $this->render('pages', $page, $data);
        }

        public function login() {
            $page = "login";
            $data['PageTitle'] = 'Login';
            $this->render('pages', $page, $data);
        }

        public function register() {
            $page = "register";
            $data['PageTitle'] = 'Register';
            $this->render('pages', $page, $data);
        }

        public function portfolio() {
            $page = "portfolio";
            $data['PageTitle'] = 'Portfolio';
            $this->render('pages', $page, $data);
        }

        public function account_login() {
            $this->Account_model->user_login();
        }

        public function account_register() {
            //$this->Account_model->user_registration();

            $user_input = $this->input->post();
            $result = $this->Account_model->user_registration($user_input);

            if ($result['status']) {
                echo "
                    <script>
                        swal({
                            icon: 'success',
                            title: '".$result['message']."',
                            text: '',
                            timer: 1500,
                            showConfirmButton: false
                        }).then(() => {
                            window.location.href = '".base_url('pages/login')."';
                        });
                    </script>
                ";
            } else {
                echo "
                    <script>
                        swal({
                            icon: 'error',
                            title: '".$result['message']."',
                            text: '',
                            timer: 1500,
                            showConfirmButton: false
                        }).then(() => {
                            window.location.href = '".base_url('pages/register')."';
                        });
                    </script>
                ";
            }
       
        }
    }
?>