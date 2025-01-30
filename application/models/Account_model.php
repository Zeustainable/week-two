<?php
    class Account_model extends CI_Model {
        public function __construct() {
            $this->load->database();
            date_default_timezone_set('Asia/Manila');
        }

        // ================================ REGISTER MODEL ================================ //

        public function User_registration($user_input) {
            if ($user_input['password'] != $user_input['confirmPassword']) {
                return false;                                                                                           //['status' => false, 'message' => 'Passwords do not match']
            }

            $user_input = array(
                'firstName' => ucfirst($user_input['firstName']),
                'middleName' => ucfirst($user_input['middleName']),
                'lastName' => ucfirst($user_input['lastName']),
                'emailAddress' => $user_input['emailAddress'],
                'password' => $user_input['password'],
                'confirmPassword' => $user_input['confirmPassword']
            );

            $user_input['password'] = password_hash($user_input['password'], PASSWORD_BCRYPT);
            unset($user_input['confirmPassword']);

            if ($this->db->insert('userregistration', $user_input)) {
                return true;                                                                                            //['status' => true, 'message' => 'Your account has been registered']
            } else {
                return false;                                                                                           //['status' => false, 'message' => 'Failed to register. Please try again.']
            }
        }

        // ================================ LOGIN MODEL ================================ //

        public function User_login($user_input) {
            $this->db->select('id, emailAddress, password');
            $this->db->from('userregistration');
            $this->db->where('emailAddress', $user_input['emailAddress']);
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                $user = $query->row_array();
                if (password_verify($user_input['password'], $user['password'])) {
                    $this->session->set_userdata('emailAddress', $user['emailAddress']);
                    return true;                                                                                        //['status' => true, 'message' => 'Login successful']
                } else {
                    return false;                                                                                       //['status' => false, 'message' => 'Incorrect password']
                }
            } else {
                return false;                                                                                           //['status' => false, 'message' => 'User not found']
            }
        }
    }
?>