<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("m_users");
    }

    function index() {
        $this->form_validation->set_rules("username", "username", "required");
        $this->form_validation->set_rules("password", "password", "required");
        if ($this->form_validation->run() == true) {

            $username = $this->input->post("username", true);
            $password = $this->input->post("password", true);
            if ($this->m_users->proseslogin($username, $password) == true) {
                $user = $this->m_users->getcurrentuser($username, $password);
                $this->session->set_userdata("id", $user['id']);
                $this->session->set_userdata("login", true);
                redirect("dashboard");
            } else {
                $this->session->set_flashdata("notif", "<center>system error</center>");
                redirect("home");
            }
        }
        $data['content'] = "login";
        $this->load->view("template", $data);
    }

    function daftar() {
        $this->form_validation->set_rules("username_register", "username", "required");
        $this->form_validation->set_rules("password_register", "pasword", "required");
        $this->form_validation->set_rules("nama_register", "nama", "required");
        $this->form_validation->set_rules("kelamin_register", "Jenis kelamin", "required");
        $this->form_validation->set_rules("alamat_register", "Alamat", "required");
        $this->form_validation->set_rules("bio_register", "bio", "required");
        if ($this->form_validation->run() == true) {
            $data = array(
                "username" => $this->input->post("username_register", true),
                "password" => md5($this->input->post("password_register", true)),
                "name" => $this->input->post("nama_register", true),
                "place" => $this->input->post("alamat_register", true),
                "sex" => $this->input->post("kelamain_register", true),
                "bio" => $this->input->post("bio_register", true),
                "reward" => 1
            );
            // echo "<script type='text/javascript' >alert('" . $data . "');</script>";
            // print_r($data);
            $this->m_users->save($data);
            $this->session->set_flashdata("notif", "<center>Pendaftaran berhasil silahkan login</center>");
            redirect("home");
        }

        $data['content'] = "daftar";
        $this->load->view("template", $data);
    }

    function login($username, $password) {
        if ($this->m_users->proseslogin($username, $password) == true) {
            $user = $this->m_users->getcurrentuser($username, $password);
            $this->session->set_userdata("id", $user['id']);
            $this->session->set_userdata("login", true);
            return true;
        } else {
            $this->session->set_flashdata("notif", "<center>system error</center>");
            return false;
        }
    }

    function logout() {
        $this->session->set_flashdata("notif", "<center>Logout</center>");
        $this->session->unset_userdata("id");
        $this->session->unset_userdata("login");
        redirect("home");
    }

}