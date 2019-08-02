<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ItemModel extends CI_Model {
    public function getItems(){
        $q = $this->db->get('tblitem'); //SELECT * FROM 
        return $q->result();    
    }
    
    
    public function getItem($id){
        $this->db->where('id',$id);
        $q = $this->db->get('tblitem');
        
        return $q->row();
    }

    public function destroy($id){
        $this->db->where('id',$id);
        $this->db->delete('tblitem');
    } 

    public function insert($data){
        $this->db->insert('tblitem',$data);

    }

    public function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update('tblitem',$data);

    }


}
