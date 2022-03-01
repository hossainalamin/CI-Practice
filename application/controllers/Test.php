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
            $this->load->view('test',$data);
        }
        public function insert_data(){
            $this->load->model('Test_model');
            $data = $this->Test_model->insert_data();
        }
    }
?>