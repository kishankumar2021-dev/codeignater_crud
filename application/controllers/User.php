<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index(){
        $this->load->model('User_model');
        $student = $this->User_model->all();

       //print_r ($student);
        //die();

        $data = array();

        $data['student'] =  $student;
        $this->load->view('list',$data);
    }
    public function create()
    {
        $this->load->model('User_model');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required');
       

        if($this->form_validation->run() == false){
            $this->load->view('create');

        }else{            
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['date'] = date('');


            $this->User_model->create($formArray);
            $this->session->set_flashdata('success','Record Added Successfully!!');
            redirect(base_url().'index.php/user/index');
        }

       
    }

    
    public function edit($id){
        
        $this->load->model('User_model');
        $student = $this->User_model->getuser($id);
        $data = array();
        $data['student'] = $student;


        

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');

        if ($this->form_validation->run() == false){
            $this->load->view('edit',$data);
        }else{
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $this->User_model->update($id,$formArray);
            $this->session->set_flashdata('success','Record Updated Successfully!!');
            redirect(base_url() . 'index.php/user/index');
        }
        


    }
    public function delete($id){
        $this->load->model('User_model');
        $student = $this->User_model->getUser($id);
        if(empty($student)){
            $this->session->set_flashdata('failure', 'Record not found!!!');
            redirect(base_url().'index.php/user/index');
        }else{
            $this->User_model->delete($id);
            $this->session->set_flashdata('success', 'Record Deleted!!');
            redirect(base_url().'index.php/user/index');


        }
    }
  
}
?>
