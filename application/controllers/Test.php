<?php 
    class Test extends CI_controller{
        function __contruct(){
            parent::__construct();
        }
        public function index(){
            $this->load->model('Test_model');
           // $test = $this->Test_model->test_function();
            $database_data = $this->Test_model->get_data();
            $data['test'] = $database_data;
            $this->load->view('user',$data);
        }
        public function search(){
            $this->load->model('Test_model');
            $data = Array();
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['phone'] = $this->input->post('phone');
            $database_data = $this->Test_model->search_data($data);
            $data['test'] = $database_data;
            $this->load->view('search',$data);
        }
        public function insert_data(){
            $this->form_validation->set_rules("name","Name","required");
            $this->form_validation->set_rules("email","email","required|valid_email");
            $this->form_validation->set_rules("phone","phone","required");
            if($this->form_validation->run() == false){
                $this->load->view('test');
            }else{
                $this->load->model('Test_model');
                $data = Array();
                $data['name'] =  $this->input->post('name');
                $data['email'] =  $this->input->post('email');
                $data['phone'] =  $this->input->post('phone');
                $data['e_dt'] =    date('Y-m-d H:i:s');
                $check = $this->Test_model->insert_data($data);
                if($check == 0){
                    $message= "Duplicate mail";
                    $data = array(
                        'message' => 'Duplicate mail'
                    );
                    $this->load->view('test',$data);

                }else{
                    $this->session->set_flashdata('add','Recored added');
                    redirect('http://localhost/codeignator-ci/bcit-ci-CodeIgniter-b73eb19/index.php/Test/index');
                }
            }
        }
        public function create(){
            $data = array();
            $data['message'] = "";
            $this->load->view('test',$data);
        }
        public function loader(){
            $this->load->helper('html');
            myfunction();
        }
        public function edit($id){
            $this->load->model('Test_model');
            $single = $this->Test_model->get_single_data($id);
            //$single_data = array();
            $single_data['single'] = $single;
            $this->form_validation->set_rules("name","Name","required");
            $this->form_validation->set_rules("email","email","required|valid_email");
            $this->form_validation->set_rules("phone","phone","required");
            if($this->form_validation->run() == false){
                $this->load->view('single_user',$single_data);
            }else{
                $this->load->model('Test_model');
                $data = Array();
                $data['name'] =  $this->input->post('name');
                $data['email'] =  $this->input->post('email');
                $data['phone'] =  $this->input->post('phone');
                $data['u_dt'] =    date('Y-m-d H:i:s');
                $this->Test_model->edit_data($id,$data);
                $this->session->set_flashdata('edit','Recored edited');
                redirect('http://localhost/codeignator-ci/bcit-ci-CodeIgniter-b73eb19/index.php/Test/index');
            }
            
        }
        public function delete($id){
            $this->load->model('Test_model');
            $this->Test_model->delete($id);
            $this->session->set_flashdata('delete','Recored deleted');
            redirect('http://localhost/codeignator-ci/bcit-ci-CodeIgniter-b73eb19/index.php/Test/index');
        }
    }
?>