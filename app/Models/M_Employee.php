<?php

namespace App\Models;

use CodeIgniter\Model;

Class M_Employee extends Model
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

    public function GetAllWorkers()
    {
        $this->select('*');
        $this->from('employee');
        $this->join('person', 'employee.id_person = person.id_person');
        $this->join('user', 'user.id_user = person.id_user');
        $this->where("rol = 'worker'");

        $query = $this->get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_EMPLOYEE');

        return $return;
    }

    public function GetAllApprovedWorkers()
    {
        $this->select('*');
        $this->from('employee');
        $this->join('person', 'employee.id_person = person.id_person');		
		$this->join('zip', 'person.id_zip = zip.id_zip');
        $this->join('user', 'user.id_user = person.id_user');
        $this->where("rol = 'worker'");
        $this->where("user.status = '1'");
        $this->where("employee.approved = '1'");

        $query = $this->get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_EMPLOYEE');

        return $return;
    }

    public function GetWorkerByApproved($approved)
    {
        $this->select('*');
        $this->from('employee');
        $this->join('person', 'employee.id_person = person.id_person');
        $this->join('user', 'user.id_user = person.id_user');
        $this->where("rol = 'worker'");
        $this->where('employee.approved = ' . "'" . $approved . "'");
        $this->where("status = '1'");

        $query = $this->get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_EMPLOYEE');

        return $return;
    }

    public function GetApprovedByPersonID($id_person)
    {
        $this->select('*');
        $this->from('employee');
        $this->join('person', 'employee.id_person = person.id_person');
        $this->join('user', 'user.id_user = person.id_user');
        $this->where("rol = 'worker'");
        $this->where('employee.id_person = ' . "'" . $id_person . "'");
        $this->where("status = '1'");

        $query = $this->get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_EMPLOYEE');

        return $return;
    }

    public function GetEmployeeByUserID($id_user)
    {
        $this->select('*');
        $this->from('employee');
        $this->join('person', 'employee.id_person = person.id_person');
        $this->join('user', 'user.id_user = person.id_user');
        $this->where('user.id_user = ' . "'" . $id_user . "'");

        $query = $this->get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_EMPLOYEE');

        return $return;
    }
}
?>