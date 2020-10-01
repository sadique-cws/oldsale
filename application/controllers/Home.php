<?php 

class Home extends CI_Controller{
    public function index(){
        $this->load->view('public/header');
        $this->load->view('public/index');
        $this->load->view('public/footer');
    }
    public function addPost(){

        $this->form_validation->set_rules('title','title','required');
        $this->form_validation->set_rules('description','description','required');
        $this->form_validation->set_rules('category','category','required');
        $this->form_validation->set_rules('address','address','required');
        $this->form_validation->set_rules('city','city','required');
        $this->form_validation->set_rules('state','state','required');
        $this->form_validation->set_rules('brand','brand','required');
        $this->form_validation->set_rules('model','model','required');
        $this->form_validation->set_rules('price','price','required');
        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('contact','contact','required');


        if($this->form_validation->run()){
                $data = [
                    'title' => $_POST['title'],
                    'category' => $_POST['category'],
                    'address' => $_POST['address'],
                    'city' => $_POST['city'],
                    'state' => $_POST['state'],
                    'brand' => $_POST['brand'],
                    'price' => $_POST['price'],
                    'name' => $_POST['name'],
                    'contact' => $_POST['contact'],
                ];
                $this->db->insert('product',$data);
                $this->session->set_flashdata('error',"data inserted sucessfully");
                redirect('home/index');
        }
        else{
            $data['category'] = $this->db->get('category')->result();
            $this->load->view('public/header');
            $this->load->view('public/add_post',$data);
            $this->load->view('public/footer');
        }
    }
}
?>