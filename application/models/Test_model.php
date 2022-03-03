<?php
    class Test_model extends CI_model{
        public function insert_data($data){
            $result = $this->db->select('email')
            ->where('sts',1)
            ->where('email',$data['email'])
            ->get('test_table')->result_array();
            if(!empty($result)){
                return 0;
            }else{
                $this->db->insert('test_table',$data);
                return 1;
            }
        }
        public function edit_data($id,$data){
            $this->db->where('id',$id)
            ->update('test_table',$data);
            
        }
        public function get_data(){
          $data =   $this->db->select('*')
            ->where('sts',1)
            ->get('test_table')->result_array();
            return $data;
        }
        public function search_data($data){
            $result =   $this->db->select('*')
              ->like('name',$data['name'])
              ->like('email',$data['email'])
              ->like('phone',$data['phone'])
              ->where('sts',1)
              ->get('test_table')->result_array();
              return $result;
          }
        public function get_single_data($id){
             $data = $this->db->select('*')
             ->where('id',$id)
             ->get('test_table')->result_array();
             return $data;
        }
        public function delete($id){
            $update_rows = array('sts' => 0,);
            $this->db->where('id',$id)->update('test_table',$update_rows);
        }
    }
?>