<?php
    class Access extends MY_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->library('session');
            $this->load->model('Crud_model');
        }
    
        // ================================ DASHBOARD PAGE ================================ //

        public function Dashboard() {
            $page = "Dashboard";
            $data['PageTitle'] = 'Dashboard';
            $this->render('access', $data);
        }

        // ================================ CRUD MAIN PAGE ================================ //

        public function Crud() {
            $data['PageTitle'] = 'CRUD';
            $data['query_run'] = $this->Crud_model->User_crud();
            $this->render('access', $data);
        }

        // ================================ CREATE PAGE ================================ //

        public function Create() {
            $data['PageTitle'] = 'Create';
            $this->render('access', $data);
        }

        // ================================ EDIT PAGE ================================ //

        public function Edit() {
            $data['PageTitle'] = 'Edit';

            $user_input = $this->input->post();
            $data['query_run'] = $this->Crud_model->User_view($user_input);
            $status = $this->Crud_model->User_view($user_input);

            if($status == true) {
                $this->render('access', $data);
            } else {
                redirect('Access/Crud'); 
            }
        }

        // ================================ VIEW PAGE ================================ //

        public function View() {
            $data['PageTitle'] = 'View';

            $user_input = $this->input->post();
            $data['query_run'] = $this->Crud_model->User_view($user_input);
            $status = $this->Crud_model->User_view($user_input);

            if($status == true) {
                $this->render('access', $data);
            } else {
                redirect('Access/Crud'); 
            }
        }

        // ================================ DELETE PAGE ================================ //

        public function Delete() {
            $user_input = $this->input->post();
            $status = $this->Crud_model->User_delete($user_input);

            if($status == true) {
                redirect('Access/Crud');
            } else {
                redirect('Access/Calculator');
            }
        }

        // ================================ CALCULATOR PAGE ================================ //

        public function Calculator() {
            $data['PageTitle'] = 'Calculator';
            $this->render('access', $data);
        }

        // ================================ CREATE CONNECT TO MODEL ================================ //

        public function User_create() {
            $user_input = $this->input->post();
            $status = $this->Crud_model->User_create($user_input);

            if($status == true) {
                redirect('Access/Create');
            } else {
                redirect('Access/Calculator');
            }
        }

        // ================================ EDIT CONNECT TO MODEL ================================ //

        public function User_edit() {
            $user_input = $this->input->post();
            $status = $this->Crud_model->user_edit($user_input);

            if($status == true) {
                redirect('Access/Crud');
            } else {
                redirect('Access/Calculator'); 
            }
        }
    }
?>