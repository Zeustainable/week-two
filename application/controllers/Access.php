<?php
    class Access extends MY_Controller {
        // public function __construct() {
        //     parent::__construct();
        //     $this->load->model('Posts_model');
        // }
    
        public function dashboard() {
            $page = "dashboard";
            $data['PageTitle'] = 'Dashboard';
            $this->render('access', $page, $data);
        }

        public function crud() {
            $page = "crud";
            $data['PageTitle'] = 'CRUD';
            $this->render('access', $page, $data);
        }

        public function create() {
            $page = "create";
            $data['PageTitle'] = 'Create';
            $this->render('access', $page, $data);
        }

        public function edit() {
            $page = "edit";
            $data['PageTitle'] = 'Edit';
            $this->render('access', $page, $data);
        }

        public function view() {
            $page = "view";
            $data['PageTitle'] = 'View';
            $this->render('access', $page, $data);
        }

        public function calculator() {
            $page = "calculator";
            $data['PageTitle'] = 'Calculator';
            $this->render('access', $page, $data);
        }
    }
?>