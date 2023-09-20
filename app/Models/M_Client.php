<?php

namespace App\Models;

use CodeIgniter\Model;

Class M_Client extends Model
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

    public function GetAllClients()
    {
        $this->select('*');
        $this->from('user');
        $this->join('person', 'user.id_user = person.id_user', 'left');
        $this->join('client', 'client.id_person = person.id_person', 'left');
        $this->where("rol = 'patient'");

        $query = $this->get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_CLIENT');

        return $return;
    }

    public function GetAllActiveClients()
    {
        $this->select('*');
        $this->from('client');
        $this->join('person', 'client.id_person = person.id_person');
        $this->join('user', 'user.id_user = person.id_user');
        $this->where("rol = 'patient'");
        $this->where("user.status = '1'");

        $query = $this->get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_CLIENT');

        return $return;
    }

    public function GetClientByPersonID($id_person)
    {
        $this->select('*');
        $this->from('client');
        $this->join('person', 'client.id_person = person.id_person');
        $this->where('person.id_person = ' . "'" . $id_person . "'");

        $query = $this->get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_CLIENT');

        return $return;
    }
}
?>