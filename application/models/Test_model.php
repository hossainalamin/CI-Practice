<?php
    class Test_model extends CI_model{
        // function __contruct(){
        //     parent::__construct();
        //     $this->load->model('Test_model','','TRUE');
        // }
        public function test_function(){
            $data[0] = 'This is first data';
            $data[1] = 'This is second data';
            $data[2] = 'This is third data';
            $data[3] = 'This is fourth data';
            return $data;
        }
        public function insert_data($data){
            $this->db->insert('test_table',$data);
        }
        public function edit_data($id,$data){
            $this->db->where('id',$id)
            ->update('test_table',$data);
            
        }
        public function get_data(){
            // $this->db->select('name,email')
            // ->where('id',2)
            // ->get('test_table')->result_array();
            $data = $this->db->query("SELECT * from test_table")->result_array();
            return $data;
        }
        public function get_single_data($id){
             $data = $this->db->select('*')
             ->where('id',$id)
             ->get('test_table')->result_array();
             return $data;
        }
        public function delete($id){
            $this->db->where('id',$id)->delete('test_table');
        }
    }
?>