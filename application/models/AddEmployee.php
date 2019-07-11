<?php

class AddEmployee extends CI_Model{

    public function add_employee($name,$gender,$status,$address,$phonenumber,$css,$html,$javascript,$php){

        $data = array(

            'emp_name'=>$name,
            'emp_gender'=>$gender,
            'status'=>$status,
            'address'=>$address,
            'phone_number'=>$phonenumber,
            'css'=>$css,
            'html'=>$html,
            'javascript'=>$javascript,
            'php'=>$php,
        );

        $this->db->insert('emp_record',$data);
    }
    public function tabledata(){

        $this->db->select('*');
        $this->db->from('emp_record');
        $query = $this->db->get();

        return $query->result();

    }

    public function delete($empid){

        $this->db->where('emp_id',$empid);
        $this->db->delete('emp_record');

    }

    public function updateInfo($empid){

        $this->db->select('*');
        $this->db->from('emp_record');
        $this->db->where('emp_id',$empid);
        $query = $this->db->get();

        return $query->result();

    }


}