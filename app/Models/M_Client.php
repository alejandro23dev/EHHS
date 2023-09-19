<?php

namespace App\Models;

use CodeIgniter\Model;

Class M_Client extends Model
{
    function  __construct()
    {
        parent::__construct();
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
        $this -> db -> select('*');
        $this -> db -> from('user');
        $this -> db -> join('person', 'user.id_user = person.id_user', 'left');
        $this -> db -> join('client', 'client.id_person = person.id_person', 'left');
        $this -> db -> where("rol = 'patient'");

        $query = $this -> db -> get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_CLIENT');

        return $return;
    }

    public function GetAllActiveClients()
    {
        $this -> db -> select('*');
        $this -> db -> from('client');
        $this -> db -> join('person', 'client.id_person = person.id_person');
        $this -> db -> join('user', 'user.id_user = person.id_user');
        $this -> db -> where("rol = 'patient'");
        $this -> db -> where("user.status = '1'");

        $query = $this -> db -> get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_CLIENT');

        return $return;
    }

    public function GetClientByPersonID($id_person)
    {
        $this -> db -> select('*');
        $this -> db -> from('client');
        $this -> db -> join('person', 'client.id_person = person.id_person');
        $this -> db -> where('person.id_person = ' . "'" . $id_person . "'");

        $query = $this -> db -> get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_CLIENT');

        return $return;
    }
}
?>