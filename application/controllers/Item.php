<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
            $this->load->model('ItemModel');
            $this->load->library('form_validation');
    }



    public function index(){
        $msg = "From Controller Message";
        $items = $this->ItemModel->getItems();
        $this->load->view('include/header');
        $this->load->view('include/mainnav');
        $this->load->view('item/index',compact('msg','items'));
        $this->load->view('include/footer');
    }

    public function diedump($data){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die();
    }

    public function view($id){
        $item = $this->ItemModel->getItem($id);
        //$this->diedump($item);
        $this->load->view('include/header');
        $this->load->view('include/mainnav');
        $this->load->view('item/view', compact('item'));
        $this->load->view('include/footer');

    }

    public function edit($id){
        $item = $this->ItemModel->getItem($id);
        $this->load->view('include/header');
        $this->load->view('include/mainnav');
        $this->load->view('item/edit', compact('item'));
        $this->load->view('include/footer');

    }

    public function delete($id){
        $item = $this->ItemModel->getItem($id);
        $this->load->view('include/header');
        $this->load->view('include/mainnav');
        $this->load->view('item/delete', compact('item'));
        $this->load->view('include/footer');

    }


    public function add(){
        
        //$item = $this->ItemModel->getItem($id);
        $this->load->view('include/header');
        $this->load->view('include/mainnav');
        $this->load->view('item/add');
        $this->load->view('include/footer');

    }

    public function destroy($id){
        $this->ItemModel->destroy($id);
        redirect('item/index');

    }

    public function insert(){
        
        $this->form_validation->set_rules('name','Item Name','required|is_unique[tblitem.name]');
        $this->form_validation->set_rules('description','Description','required');
        $this->form_validation->set_rules('price','Price','required|numeric');
        if($this->form_validation->run() == FALSE){
            $this->add();//redirect('item/add');
        }else{
            $data = $this->input->post();
            unset($data['button']);
            $this->ItemModel->insert($data);
            redirect('item/index');
        }
        
    }

    public function name_check($str)
    {
            if (!preg_match('/^(\d{2}-){3}\d{2}$/',$str))
            {
                    $this->form_validation->set_message('name_check', 'Ang nilagay mong pangalan na {field} ay bawal');
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
    }


    public function update(){
        $data = $this->input->post();
        $id = $this->input->post('id');
        unset($data['button']);
        //$this->diedump($data);
        $this->ItemModel->update($id,$data);
        redirect('item/index');
    }


    public function test($id){
        echo $this->uri->segment(3);
    }

}
