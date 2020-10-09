<?php 

class Home extends CI_Controller{
    public function index(){
        $data['products'] = $this->db->get('product')->result();
        $data['category'] = $this->db->get('category')->result();
        $this->load->view('public/header',$data);
        $this->load->view('public/index',$data);
        $this->load->view('public/footer');
    }
    public function addPost(){
        $data['category'] = $this->db->get('category')->result();

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

            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';


            $this->load->library('upload',$config);

                if($this->upload->do_upload('image')){
                    

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
                    'image' => $_FILES['image']['name']
                ];
                $this->db->insert('product',$data);
                $this->session->set_flashdata('error',"data inserted sucessfully");
                redirect('home/index');

                
            }
            else{
                $data['error'] = $this->upload->display_errors();
                $this->load->view('public/header');
                $this->load->view('public/add_post',$data);
                $this->load->view('public/footer');
            }

        }
        else{
            $this->load->view('public/header',$data);
            $this->load->view('public/add_post',$data);
            $this->load->view('public/footer');
        }
    }

    public function category($cat_id){
        $data['products'] = $this->db->where(array("category"=>$cat_id))->get('product')->result();
        $data['category'] = $this->db->get('category')->result();
        $this->load->view('public/header',$data);
        $this->load->view('public/index',$data);
        $this->load->view('public/footer');
    }
    
    public function search(){

        $search = $_GET['search'];
        $data['products'] = $this->db->like(array("title"=>$search))->get('product')->result();
        $data['category'] = $this->db->get('category')->result();
        $this->load->view('public/header',$data);
        $this->load->view('public/index',$data);
        $this->load->view('public/footer');
    }
    
    public function product($pro_id){
        $data['pro'] = $this->db->where(array("id"=>$pro_id))->get('product')->row();
        $data['products'] = $this->db->where(array("id !="=>$pro_id))->get('product')->result();
        $data['category'] = $this->db->get('category')->result();
        $this->load->view('public/header',$data);
        $this->load->view('public/product',$data);
        $this->load->view('public/footer');
    }

    public function add_category(){
        $this->form_validation->set_rules('title','title','required');
        $this->form_validation->set_rules('description','description','required');

        if($this->form_validation->run()){
            $data = [
                'title' => $_POST['title'],
                'description' => $_POST['description']
            ];

            $this->db->insert("category",$data);
          redirect('home/addPost');
        }
    }
}
?>