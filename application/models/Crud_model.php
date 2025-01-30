<?php
    class Crud_model extends CI_Model {
        public function __construct() {
            $this->load->database();
            date_default_timezone_set('Asia/Manila');
        }

        // ================================ VIEW CRUD CONNECT TO MODEL ================================ //

        public function User_crud() {
            $this->db->select('*');
            $this->db->from('dailytask');
            $this->db->where('isArchived', '1');
            
            $query = $this->db->get();
            return $query->result_array();
        }

        // ================================ CREATE CONNECT TO MODEL ================================ //

        public function User_create($user_input) {
            if(isset($_POST['save_student']))
            {
                $user_input = array(
                    'date' => $user_input['date'],
                    'task' => $user_input['task'],
                    'status' => $user_input['status'],
                    'isArchived' => 1
                );
                
                $query_run = $this->db->insert('dailytask', $user_input);
                if($query_run) {
                    //$_SESSION['message'] = "Student created successfully";
                    redirect(base_url('Access/Create'));
                    exit(0);
                } else {
                    //$_SESSION['message'] = "Student not created";
                    redirect(base_url('Access/Create'));
                    exit(0);
                }
            }
        }

        // ================================ EDIT CONNECT TO MODEL ================================ //

        public function User_edit($user_input) {
            $user_input = array(
                'id' => $user_input['id'],
                'date' => $user_input['date'],
                'task' => $user_input['task'],
                'status' => $user_input['status']
            );

            $this->db->where('id', $user_input['id']);
            $this->db->update('dailytask', $user_input);

            if ($this->db->affected_rows()>0) {
                return true;
            } else {
                return false;
            }
        }

        // ================================ VIEW ID CONNECT TO MODEL ================================ //

        public function User_view($user_input) {
            $this->db->select('*');
            $this->db->from('dailytask');
            $this->db->where('id', $user_input['id']);
            
            $query = $this->db->get();
            return $query->result_array();
        }

        // ================================ DELETE CONNECT TO MODEL ================================ //

        public function User_delete($user_input) {
            $user_input = array(
                'id' => $user_input['id'],
                'isArchived' => '0'
            );

            $this->db->where('id', $user_input['id']);
            $this->db->update('dailytask', $user_input);

            if ($this->db->affected_rows()>0) {
                return true;
            } else {
                return false;
            }
        }
    }
?>