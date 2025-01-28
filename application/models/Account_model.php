<?php
    class Account_model extends CI_Model {
        public function __construct() {
            $this->load->database();
            date_default_timezone_set('Asia/Manila');
        }

        public function user_registration($user_input) {
            if ($user_input['password'] !== $user_input['confirmPassword']) {
                $messageStatus = ['status' => false, 'message' => 'Passwords do not match'];
                return $messageStatus;
            }

            $user_input['password'] = password_hash($user_input['password'], PASSWORD_BCRYPT);
            unset($user_input['confirmPassword']);

            if ($this->db->insert('userregistration', $user_input)) {
                $messageStatus = ['status' => true, 'message' => 'Your account has been registered'];
                return $messageStatus;
            } else {
                $messageStatus = ['status' => false, 'message' => 'Failed to register. Please try again.'];
                return $messageStatus;
            }
        }

        public function user_login() {
            $this->db->select('id, emailAddress, password');
            $this->db->from('userregistration');
            $this->db->where('emailAddress', $email);
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                $user = $query->row_array();
                
                if (password_verify($password, $user['password'])) {
                    $this->session->set_userdata('emailAddress', $user['emailAddress']);
                    $messageStatus = ['status' => true, 'message' => 'Login successful'];
                    return $messageStatus;
                } else {
                    $messageStatus = ['status' => false, 'message' => 'Incorrect password'];
                    return $messageStatus;
                }
            } else {
                $messageStatus = ['status' => false, 'message' => 'User not found'];
                return $messageStatus;
            }
        }
    }
?>