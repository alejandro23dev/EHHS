<?php

namespace App\Models;

use CodeIgniter\Model;

class M_User extends Model
{
  protected $db;

  function  __construct()
  {
    parent::__construct();
    $this->db = \Config\Database::connect();
  }

  public function Result($error_code = 0, $error_msg = 0, $result = '')
  {
    $return['error_code'] = $error_code;
    $return['error_msg'] = $error_msg;
    $return['data'] = $result;

    return $return;
  }

  public function GetAccountUserByUserID($id_user)
  {
    $this->select('*');
    $this->from('user');
    $this->where('id_user = ' . "'" . $id_user . "'");
    $this->limit(1);

    $query = $this->get(); //var_dump($query->row());die();

    if ($query->num_rows() == 1)
      $return = $this->Result(0, 0, $query->row());
    else
      $return = $this->Result(1, 'NO_LOGGED');

    return $return;
  }

  public function GetProfileUserByUserID($id_user)
  {
    $this->select('*');
    $this->from('person');
    $this->join('zip', 'zip.id_zip = person.id_zip');
    $this->join('city', 'city.id_city = zip.id_city');
    $this->join('state', 'state.id_state = city.id_state');
    $this->join('country', 'country.id_country = state.id_country');
    $this->where('id_user = ' . "'" . $id_user . "'");
    $this->limit(1);

    $query = $this->get(); //var_dump($query->row());die();

    if ($query->num_rows() == 1)
      $return = $this->Result(0, 0, $query->row());
    else
      $return = $this->Result(1, 'NO_PERSON');

    return $return;
  }

  public function GetStateByZIP($zip)
  {
    $this->select('*');
    $this->from('zip');
    $this->join('city', 'city.id_city = zip.id_city');
    $this->join('state', 'state.id_state = city.id_state');
    $this->join('country', 'country.id_country = state.id_country');
    $this->where('zip = ' . "'" . $zip . "'");

    $query = $this->get(); //var_dump($query->row());die();

    if ($query->num_rows() >= 1)
      $return = $this->Result(0, 0, $query->row());
    else
      $return = $this->Result(1, 'NO_ZIP');

    return $return;
  }

  public function GetEmployeeByPersonID($id_person)
  {
    $this->select('*');
    $this->from('employee');
    $this->where('id_person = ' . "'" . $id_person . "'");
    $this->limit(1);

    $query = $this->get(); //var_dump($query->row());die();

    if ($query->num_rows() == 1)
      $return = $this->Result(0, 0, $query->row());
    else
      $return = $this->Result(1, 'NO_EMPLOYEE');

    return $return;
  }

  public function GetFormByPersonID($id_person, $form_name)
  {
    $this->select('*');
    $this->from('form');
    $this->join('employee', 'employee.id_employee = form.id_employee');
    $this->where('id_person = ' . "'" . $id_person . "'");
    $this->where('form_name = ' . "'" . $form_name . "'");
    $this->limit(1);

    $query = $this->get(); //var_dump($query->row());die();

    if ($query->num_rows() == 1)
      $return = $this->Result(0, 0, $query->row());
    else
      $return = $this->Result(1, 'NO_EMPLOYEE');

    return $return;
  }

  public function GetAllFormsByPersonID($id_person)
  {
    $this->select('*');
    $this->from('form');
    $this->join('employee', 'employee.id_employee = form.id_employee');
    $this->where('id_person = ' . "'" . $id_person . "'");

    $query = $this->get(); //var_dump($query->result());die();

    if ($query->num_rows() >= 1)
      $return = $this->Result(0, 0, $query->result());
    else
      $return = $this->Result(1, 'NO_EMPLOYEE');

    return $return;
  }

  public function GetRoleByUserID($id_user)
  {
    $this->select('rol');
    $this->from('user');
    $this->where('id_user = ' . "'" . $id_user . "'");
    $this->limit(1);

    $query = $this->get(); //var_dump($query->result());die();

    if ($query->num_rows() == 1)
      $return = $this->Result(0, 0, $query->row());
    else
      $return = $this->Result(1, 'NO_EMPLOYEE');

    return $return;
  }

  public function GetRoleByPersonID($id_person)
  {
    $this->select('rol, first_name, second_name, last_name, ssn');
    $this->from('user');
    $this->join('person', 'person.id_user = user.id_user');
    $this->where('id_person = ' . "'" . $id_person . "'");
    $this->limit(1);

    $query = $this->get(); //var_dump($query->result());die();

    if ($query->num_rows() == 1)
      $return = $this->Result(0, 0, $query->row());
    else
      $return = $this->Result(1, 'NO_EMPLOYEE');

    return $return;
  }

  public function GetRoleByEmployeeID($id_employee)
  {
    $this->select('rol, first_name, second_name, last_name, ssn, address');
    $this->from('user');
    $this->join('person', 'person.id_user = user.id_user');
    $this->join('employee', 'employee.id_person = person.id_person');
    $this->where('id_employee = ' . "'" . $id_employee . "'");
    $this->limit(1);

    $query = $this->get(); //var_dump($query->result());die();

    if ($query->num_rows() == 1)
      $return = $this->Result(0, 0, $query->row());
    else
      $return = $this->Result(1, 'NO_EMPLOYEE');

    return $return;
  }

  public function GetConsentByPersonID($id_person, $form_name)
  {
    $this->select('*');
    $this->from('consent');
    $this->join('form', 'form.id_form = consent.id_form');
    $this->join('employee', 'employee.id_employee = form.id_employee');
    $this->where('id_person = ' . "'" . $id_person . "'");
    $this->where('form_name = ' . "'" . $form_name . "'");

    $query = $this->get(); //var_dump($query->row());die();

    if ($query->num_rows() >= 1)
      $return = $this->Result(0, 0, $query->result());
    else
      $return = $this->Result(1, 'NO_EMPLOYEE');

    return $return;
  }

  public function GetEmployeeByEmployeeID($id_employee)
  {
    $this->select('*');
    $this->from('employee');
    $this->where('employee.id_employee = ' . "'" . $id_employee . "'");
    $this->limit(1);

    $query = $this->get(); //var_dump($query->row());die();

    if ($query->num_rows() == 1)
      $return = $this->Result(0, 0, $query->row());
    else
      $return = $this->Result(1, 'NO_EMPLOYEE');

    return $return;
  }

  public function GetFormByEmployeeID($id_employee, $form_name)
  {
    $this->select('*');
    $this->from('form');
    $this->join('employee', 'employee.id_employee = form.id_employee');
    $this->where('employee.id_employee = ' . "'" . $id_employee . "'");
    $this->where('form_name = ' . "'" . $form_name . "'");
    $this->limit(1);

    $query = $this->get(); //var_dump($query->row());die();

    if ($query->num_rows() == 1)
      $return = $this->Result(0, 0, $query->row());
    else
      $return = $this->Result(1, 'NO_EMPLOYEE');

    return $return;
  }

  public function GetConsentByEmployeeID($id_employee, $form_name)
  {
    $this->select('*');
    $this->from('consent');
    $this->join('form', 'form.id_form = consent.id_form');
    $this->join('employee', 'employee.id_employee = form.id_employee');
    $this->where('employee.id_employee = ' . "'" . $id_employee . "'");
    $this->where('form_name = ' . "'" . $form_name . "'");

    $query = $this->get(); //var_dump($query->row());die();

    if ($query->num_rows() >= 1)
      $return = $this->Result(0, 0, $query->result());
    else
      $return = $this->Result(1, 'NO_EMPLOYEE');

    return $return;
  }

  public function GetClientByUserID($id_user)
  {
    $this->select('id_client');
    $this->from('client');
    $this->join('person', 'person.id_person = client.id_person');
    $this->where('id_user = ' . "'" . $id_user . "'");
    $this->limit(1);

    $query = $this->get(); //var_dump($query->row());die();

    if ($query->num_rows() == 1)
      $return = $this->Result(0, 0, $query->row());
    else
      $return = $this->Result(1, 'NO_EMPLOYEE');

    return $return;
  }
}
