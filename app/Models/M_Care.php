<?php

namespace App\Models;

use CodeIgniter\Model;

Class M_Care extends Model
{
    protected $db;
    
    function  __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    public function Result($error_code=0, $error_msg=0, $result='')
    {
        $return['error_code']=$error_code;
        $return['error_msg']=$error_msg;
        $return['data']=$result;

        return $return;
    }

    public function GetCareByClientID($id_client)
    {
        $this ->select('*');
        $this ->from('care_schedule');
        $this ->join('client', 'client.id_client = care_schedule.id_client');
        $this ->join('person', 'client.id_person = person.id_person');
        $this ->join('user', 'user.id_user = person.id_user');
        $this ->where('care_schedule.id_client = ' . "'" . $id_client . "'");

        $query = $this->get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_CLIENT');

        return $return;
    }

    public function GetAllCares()
    {
        $this->select('*');
        $this->from('care_schedule');
        $this->join('client', 'client.id_client = care_schedule.id_client');
        $this->join('person', 'client.id_person = person.id_person');
        $this->join('user', 'user.id_user = person.id_user');

        $query = $this->get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_CLIENT');

        return $return;
    }

    public function GetCareByApproved($approved)
    {
        $this->select('*');
        $this->from('care_schedule');
        $this->join('client', 'client.id_client = care_schedule.id_client');
        $this->join('person', 'client.id_person = person.id_person');
        $this->where('care_schedule.approved = ' . "'" . $approved . "'");

        $query = $this->get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_CLIENT');

        return $return;
    }

    public function GetAvailableCare()
    {
        $this->select('*');
        $this->from('care_schedule as c');
        $this->join('client', 'client.id_client = c.id_client');
        $this->join('person', 'client.id_person = person.id_person');
        $this->where("c.approved = '1'");
        $this->where("NOT EXISTS(select * from employee_care as e where c.id_care_schedule = e.id_care_schedule)", '', FALSE);

        $query = $this->get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_CLIENT');

        return $return;
    }
}
?>