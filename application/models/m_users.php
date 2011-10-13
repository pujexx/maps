<?php

class M_users extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function save($data) {
        $this->db->insert("users", $data);
    }

    function proseslogin($username, $password) {
        $this->db->where("username", $username);
        $this->db->where("password", md5($password));

        $result = $this->db->get("users");
        if ($result->num_rows() == 1) {
            return true;
        }
    }

    function getcurrentuser($username, $password) {
        $this->db->where("username", $username);
        $this->db->where("password", md5($password));

        $result = $this->db->get("users");
        if ($result->num_rows() == 1) {
            return $result->row_array();
        }
    }

}
?>
