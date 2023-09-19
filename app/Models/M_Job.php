<?php

namespace App\Models;

use CodeIgniter\Model;

Class M_Job extends Model
{
    function  __construct()
    {
        parent::__construct();
    }

    function Result($error_code=0, $error_msg=0, $result='')
    {
        $return['error_code']=$error_code;
        $return['error_msg']=$error_msg;
        $return['data']=$result;

        return $return;
    }

    function GetAssignedJobByEmployeeID($id_employee)
    {
        $this -> db -> select('person_c.id_person, person_c.first_name, person_c.second_name, person_c.last_name, start_time, end_time, start_date, end_date, week_days, repeat_every_week, 
        care_schedule.approved, user_e.status AS status_e, person_e.id_person AS id_p, person_e.first_name AS f_n, person_e.second_name AS s_n, person_e.last_name AS l_n, id_employee_care,
        (select count(id_asist_care) from asist_care where asist_care.id_employee_care = employee_care.id_employee_care) AS HAVE_ASIST_CARE');
        $this -> db -> from('employee_care');
        $this -> db -> join('care_schedule', 'care_schedule.id_care_schedule = employee_care.id_care_schedule');
        $this -> db -> join('client', 'client.id_client = care_schedule.id_client');
        $this -> db -> join('person AS person_c', 'client.id_person = person_c.id_person');
        $this -> db -> join('employee', 'employee.id_employee = employee_care.id_employee');
        $this -> db -> join('person AS person_e', 'person_e.id_person = employee.id_person');
        $this -> db -> join('user AS user_e', 'user_e.id_user = person_e.id_user');
        $this -> db -> where('employee_care.id_employee = ' . "'" . $id_employee . "'");

        $query = $this -> db -> get();//echo json_encode($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_JOB');

        return $return;
    }

    function GetAllAssignedJobs()
    {
        $this -> db -> select('person_c.id_person, person_c.first_name, person_c.second_name, person_c.last_name, start_time, end_time, start_date, end_date, week_days, repeat_every_week, 
        care_schedule.approved,  user_e.status AS status_e, person_e.id_person AS id_p, person_e.first_name AS f_n, person_e.second_name AS s_n, person_e.last_name AS l_n, id_employee_care,
        (select count(id_asist_care) from asist_care where asist_care.id_employee_care = employee_care.id_employee_care) AS HAVE_ASIST_CARE');
        $this -> db -> from('employee_care');
        $this -> db -> join('care_schedule', 'care_schedule.id_care_schedule = employee_care.id_care_schedule');
        $this -> db -> join('client', 'client.id_client = care_schedule.id_client');
        $this -> db -> join('person AS person_c', 'client.id_person = person_c.id_person');
        $this -> db -> join('employee', 'employee.id_employee = employee_care.id_employee');
        $this -> db -> join('person AS person_e', 'person_e.id_person = employee.id_person');
        $this -> db -> join('user AS user_e', 'user_e.id_user = person_e.id_user');

        $query = $this -> db -> get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_CLIENT');

        return $return;
    }

    function GetInterestedJobsByEmployeeIDCareScheduleID($id_employee='', $id_care_schedule='')
    {
        $this -> db -> select('*');
        $this -> db -> from('employee_interested');
        if($id_employee!='')$this -> db -> where('id_employee = ' . "'" . $id_employee . "'");
        if($id_care_schedule!='')$this -> db -> where('id_care_schedule = ' . "'" . $id_care_schedule . "'");

        $query = $this -> db -> get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_CLIENT');

        return $return;
    }

    function DeleteInterestedJob($id_employee, $id_care_schedule)
    {
        $delete=array('id_employee' => $id_employee, 'id_care_schedule' => $id_care_schedule);
        $this->db->delete('employee_interested', $delete);

        $return=$this->Result(0, 0);
        return $return;
    }

    function GetInterestedEmployeeByCareScheduleID($id_care_schedule='')
    {
        $this -> db -> select('*');
        $this -> db -> from('employee_interested');
        $this -> db -> join('employee', 'employee.id_employee = employee_interested.id_employee');
        $this -> db -> join('person', 'employee.id_person = person.id_person');
        $this -> db -> where('id_care_schedule = ' . "'" . $id_care_schedule . "'");

        $query = $this -> db -> get();//var_dump($query->result());die();

        if($query -> num_rows() >= 1)
            $return=$this->Result(0, 0, $query->result());
        else
            $return=$this->Result(1, 'NO_INTEREST');

        return $return;
    }
}
?>