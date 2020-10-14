<?php 


class Auth extends CI_Controller{
    public function login(){

        if($this->session->userdata('user')){
            redirect("home/index");
        }
        $data['category'] = $this->db->get('category')->result();
        
        $this->form_validation->set_rules('contact','contact','required');
        $this->form_validation->set_rules('password','password','required');

        if($this->form_validation->run()){
            $data = [
                'contact' => $_POST['contact'],
                'password' => md5($_POST['password'])
            ];

            $count = $this->db->where($data)->get('accounts')->num_rows();

            if($count > 0){
                $this->session->set_userdata("user",$_POST['contact']);
                redirect("home/index");
            }
            else{
                $this->session->set_flashdata("error","incorrect password and username");
                redirect("auth/login");
            }
        }
        else{
            $this->load->view("public/header",$data);
            $this->load->view("auth/login");
            $this->load->view("public/footer");
        }
    }
    public function signup(){
        $data['category'] = $this->db->get('category')->result();

        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('contact','contact',"required|is_unique[accounts.contact]");
        $this->form_validation->set_rules('email','email','required|is_unique[accounts.email]');
        $this->form_validation->set_rules('city','city','required');
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('confirm_password','re-password','required|matches[password]');


        if($this->form_validation->run()){
            $data = [
                'name' => $_POST['name'],
                'contact' => $_POST['contact'],
                'email' => $_POST['email'],
                'city' => $_POST['city'],
                'password' => md5($_POST['password']),
            ];

            $this->db->insert('accounts',$data);
            $this->msg91->send($_POST['contact'],"hi ". $_POST['name'].", your account is created successfully");
            //login after signup
            $this->session->set_userdata("user",$_POST['contact']);
            redirect("auth/login");
        }

        $this->load->view("public/header",$data);
        $this->load->view("auth/signup");
        $this->load->view("public/footer");
    }
    public function logout(){
            $this->session->unset_userdata("user");
            redirect("auth/login");
    }

    private function gen_otp($length){
        $string = "0123456789";

        $result = "";
        for($x = 1;$x <= $length; $x++){
            $result .= substr($string,rand()%(strlen($string)),1);
        }
        return $result;
    }

    public function forget(){
        $data['category'] = $this->db->get('category')->result();
        
        $this->form_validation->set_rules('contact','contact','required');

        if($this->form_validation->run()){
            $data = [
                'contact' => $_POST['contact'],
            ];

            $count = $this->db->where($data)->get('accounts')->num_rows();


            if($count > 0){
                $otp =  $this->gen_otp(6);
                $this->msg91->send($_POST['contact'],"Password Reset, Please don't share this OTP with anyone" .$otp);
                $this->session->set_userdata("otp",$otp);
                $this->session->set_userdata("contact",$_POST['contact']);
                redirect("auth/otp_check");
            }
            else{
                $this->session->set_flashdata("error","incorrect password and username");
                redirect("auth/login");
            }
        }
        else{
            $this->load->view("public/header",$data);
            $this->load->view("auth/forget_password");
            $this->load->view("public/footer");
        }
    }

    public function otp_check(){
        if(!$this->session->userdata('otp')){
            redirect("auth/forget");
        }

        $data['category'] = $this->db->get('category')->result();
        
        $this->form_validation->set_rules('otp','otp','required|exact_length[6]');


        if($this->form_validation->run()){
            if($_POST['otp'] == $this->session->userdata('otp')){
                $this->session->unset_userdata("otp");
                redirect("auth/reset_password");
            }
            else{
                $this->session->set_flashdata("error","OTP invalid");
                redirect("auth/otp_check");
            }
            
        }
        else{
            $this->load->view("public/header",$data);
            $this->load->view("auth/otp_check");
            $this->load->view("public/footer");
        }

    }
    public function reset_password(){
        $data['category'] = $this->db->get('category')->result();

        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('confirm_password','re-password','required|matches[password]');


        if($this->form_validation->run()){
            $data = [
               'password' => md5($_POST['password']),
            ];
            $contact = $this->session->userdata("contact");
            $this->db->update('accounts',$data,array("contact"=>$contact));
            $this->msg91->send($contact,"hi ". $_POST['name'].", your password reset successfully");
            $this->session->set_flashdata("error","<div class='alert bg-success text-white'>your password reset successfully</div>");
            //login after signup
            $this->session->set_userdata("user",$contact);
            redirect("auth/login");
        }

        $this->load->view("public/header",$data);
        $this->load->view("auth/reset_password");
        $this->load->view("public/footer");
    }
}
?>