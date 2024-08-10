<?php
    class Student_model extends CI_model{

        function create($formArray){
            $this->db->insert('student',$formArray);
        }

        function all(){
            return $student= $this->db->get('student')->result_array();
        }

        function getStudent($id){
            $this->db->where('id',$id);
            return  $student = $this->db->get('student')->row_array();
        }

        function updateStudent($id,$formArray){
            $this->db->where('id',$id);
            $this->db->update('student',$formArray);
        }

        function deleteStudent($id){
            $this->db->where('id',$id);
            $this->db->delete('student');

        }

    }
?>