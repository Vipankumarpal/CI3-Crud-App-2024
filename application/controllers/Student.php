<?php

    class Student extends CI_controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('Student_model');
            
        }


        function index(){
            
            $student= $this->Student_model->all();
            $data= array();
            $data['student'] = $student;
            $this->load->view('list',$data);


           

        }
        
        public function create(){
        

            $this->form_validation->set_rules('name','Name','trim|required');
            $this->form_validation->set_rules('class','Class','trim|required');
            $this->form_validation->set_rules('rollno','Roll No','trim|required');
            $this->form_validation->set_rules('phone','Phone','trim|required');
            $this->form_validation->set_rules('email','Email','trim|required');
            $this->form_validation->set_rules('address','Address','trim|required');
            
            
            if($this->form_validation->run() == true){

                $form_array = array();
                
                $form_array['name'] = $this->input->post('name');
                $form_array['class'] = $this->input->post('class');
                $form_array['rollno'] = $this->input->post('rollno');
                $form_array['phone'] = $this->input->post('phone');
                $form_array['email'] = $this->input->post('email');
                $form_array['address'] = $this->input->post('address');
                
                

                $this->Student_model->create($form_array);
                $this->session->set_flashdata('success','Student Add Successfully!');
                redirect(site_url().'Student/index');


                
            }else{
                
                $this->load->view('create');
            }
        }



        function edit($id){
            
            $student = $this->Student_model->getStudent($id);
            $data= array();
            $data['student']= $student;

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('class', 'Class', 'required');
            $this->form_validation->set_rules('rollno', 'Roll No', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('address', 'Address', 'required');

            if($this->form_validation->run() == false){
                $this->load->view('edit',$data);
            } else{
                $formArray= array();
                $formArray['name'] = $this->input->post('name');
                $formArray['class'] = $this->input->post('class');
                $formArray['rollno'] = $this->input->post('rollno');
                $formArray['phone'] = $this->input->post('phone');
                $formArray['email'] = $this->input->post('email');
                $formArray['address'] = $this->input->post('address');
                
                $this->Student_model->updateStudent($id,$formArray);
                $this->session->set_flashdata('success', 'Record Updated Successfully!');
                redirect(base_url().'Student/index');
            }
           
        }

        function delete($id){
           
           $student = $this->Student_model->getStudent($id);
           if(empty($student)){
            $this->session->set_flashdata('failure', 'Record Not Found In Database!');
            redirect(base_url().'Student/index');
           }

           $this->Student_model->deleteStudent($id);
           $this->session->set_flashdata('success', 'Record Deleted Successfully!');
           redirect(base_url().'Student/index');
        }


       
    }
?>