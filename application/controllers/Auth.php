<?php 


class Auth extends CI_Controller{
    public function login(){
        $data['category'] = $this->db->get('category')->result();

        $this->load->view("public/header",$data);
        $this->load->view("auth/login");
        $this->load->view("public/footer");
    }
    public function signup(){
        $data['category'] = $this->db->get('category')->result();

        $this->load->view("public/header",$data);
        $this->load->view("auth/signup");
        $this->load->view("public/footer");
    }
    public function logout(){

    }
}
?>