<?php

namespace App\Models;

use CodeIgniter\Model;

Class M_Main extends Model
{
    protected $db;
    
    function __construct()
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
	
	public function GetCompletedPercentByPersonID($id_person)
	{
		$return=array();
		
		$this->select('*');
        $this->from('employee');
        $this->where('id_person = ' . "'" . $id_person . "'");
        $this->limit(1);

        $query = $this->get();//var_dump($query->row());die();

        if($query -> num_rows() == 1)
			$return=$this->Result(0, 0, $query->row());
        else
			$return=$this->Result(1, 'NO_EMPLOYEE');

		return $return;
	}

	public function GetCompletedPercentByEmployeeID($id_employee)
	{
		$this->select('*');
        $this->from('employee');
        $this->where('id_employee = ' . "'" . $id_employee . "'");
        $this->limit(1);

        $query = $this->get();//var_dump($query->row());die();

        if($query -> num_rows() == 1)
			$return=$this->Result(0, 0, $query->row());
        else
			$return=$this->Result(1, 'NO_EMPLOYEE');

		return $return;
	}

    public function Execute($type='', $fields='', $datas='', $table='', $field_id='')
    {
        $return['data']='';

        if($type=='INSERT')
        {
            foreach ($fields as $field)
            {
                if($field!='id'){
                    $insert[$field] = $datas[$field];
                    //print $field.' = '.$record[$field].'   ';
                }
            }
			$sql = $this->set($insert)->get_compiled_insert($table);
			//echo $sql.'<br>';
			
			$this->insert($table, $insert);
			$insert_id['last_id'] = $this->insert_id();
			$return=$this->Result(0, 0, $insert_id);
        }

        if($type=='UPDATE')
        {
			//$query = $this->db->where($field_id, $datas['id'])->get($table);

			//if($query->num_rows() > 0)
			//{
				foreach ($fields as $field)
				{
                    if($field!='id'){
                        $update[$field] = $datas[$field];
                    }
				}

                $this->where($field_id, $datas['id']);
                $this->update($table, $update);

				//$this->db->update($table, $update, array($field_id => $datas['id']));print $field_id.' - '.$datas['id'];
                //echo $this->db->set($update, array($field_id => $datas['id']))->get_compiled_update($table);

				$return=$this->Result(0, 0,array());
			//}
			//else
				//$return=$this->Result(1, 'The record does not exist.');
		   
			return $return;
        }

        if($type=='DELETE')
        {
            $id_eliminated='';

            $var = explode("-",$datas['ids']);

            if(sizeof($var) != 0)
            {
                for ($i = 0; $i < sizeof($var); next($var), $i++)
                {
                    $id = current($var);//print $id.' - ';
                    $delete=array($field_id => $id);

                    $this->delete($table, $delete);

                    if($id_eliminated=='')
                        $id_eliminated=$id;
                    else
                        $id_eliminated.='-'.$id;

                }
            }

            $return=$this->Result(0, 0, $id_eliminated);
        }

        return $return;
    }

    public function CkeckProfile($data)
	{
		$i=0;
		$return=array();
		
		$this->select('*');
        $this->from('person');

        if(isset($data['id_user']) && $data['id_user']!='')$this->where('id_user = ' . "'" . $data['id_user'] . "'");
        elseif(isset($data['id_person']) && $data['id_person']!='')$this->where('id_person = ' . "'" . $data['id_person'] . "'");

        $this->limit(1);

        $query = $this->get();//var_dump($query->row());die();

        if($query -> num_rows() != 1)
		{
			$return['NO_FILLED_PERSON'] = 1;
		}
			
       
		return $return;
	}

	public function CkeckEmployee($data)
	{
		$i=0;
		$return=array();

		$this->select('*');
        $this->from('person');
        $this->join('employee', 'employee.id_person = person.id_person');

        if(isset($data['id_user']) && $data['id_user']!='')$this->where('id_user = ' . "'" . $data['id_user'] . "'");
        elseif(isset($data['id_person']) && $data['id_person']!='')$this->where('id_person = ' . "'" . $data['id_person'] . "'");

        $this->limit(1);

        $query = $this->get();//var_dump($query->row());die();

        if($query -> num_rows() != 1)
		{
			$return['NO_FILLED_PERSON'] = 1;
		}


		return $return;
	}

	public function CkeckClient($data)
	{
		$return=array();

		$this->select('*');
        $this->from('person');
        $this->join('client', 'client.id_person = person.id_person');

        if(isset($data['id_user']) && $data['id_user']!='')$this->where('id_user = ' . "'" . $data['id_user'] . "'");
        elseif(isset($data['id_person']) && $data['id_person']!='')$this->where('id_person = ' . "'" . $data['id_person'] . "'");

        $this->limit(1);

        $query = $this->get();//var_dump($query->row());die();

        if($query -> num_rows() != 1)
		{
			$return['NO_FILLED_PERSON'] = 1;
		}


		return $return;
	}
	
	public function Logout()
    {
        $this->logout();
    }
}
?>