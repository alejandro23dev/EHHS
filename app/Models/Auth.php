<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth extends Model
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

    public function login($username, $password)
    {
        $builder = $this->db->table('user');
        $builder->select('*');
        $builder->where('user', $username);
        $builder->limit(1);

        $query = $builder->get();

        if ($query->getNumRows() == 1) {
            if ($query->getRow()->activate_status == 1) {

                if ($query->getRow()->status == 1) {
                    if (password_verify($password, $query->getRow()->pass)) {
                        $return = $this->result(0, 0, $query->getRow());
                    } else {
                        $return = $this->result(1, 'WRONG_PASS');
                    }
                } else {
                    $return = $this->result(1, 'INACTIVE', $query->getRow());
                }
            } else {
                $return = $this->result(1, 'ACTIVATE', $query->getRow());
            }
        } else {
            $return = $this->result(1, 'WRONG_ID');
        }

        return $return;
    }

    public function getPersonByUserId($id_user)
    {
        $builder = $this->db->table('person');
        $builder->select('*');
        $builder->where('id_user', $id_user);
        $builder->limit(1);

        $query = $builder->get();

        if ($query->getNumRows() == 1) {
            $return = $this->result(0, 0, $query->getRow());
        } else {
            $return = $this->result(1, 'PERSON_EMPTY');
        }

        return $return;
    }

    public function validateEmail($email)
    {
        $builder = $this->db->table('user');
        $builder->select('*');
        $builder->where('email', $email);
        $builder->limit(1);

        $query = $builder->get();

        if ($query->getNumRows() == 1) {
            $return = $this->result(0, 0, $query->getRow());
        } else {
            $return = $this->result(1, 'WRONG_EMAIL');
        }

        return $return;
    }

    public function validateUserID($user)
    {
        $builder = $this->db->table('user');
        $builder->select('*');
        $builder->where('user', $user);
        $builder->limit(1);

        $query = $builder->get();

        if ($query->getNumRows() == 1) {
            $return = $this->result(0, 0, $query->getRow());
        } else {
            $return = $this->result(1, 'WRONG_ID');
        }

        return $return;
    }

    public function ValidateSecAnswers($data)
    {
        $this->select('*');
        $this->from('user');

        if ($data['user_email'] == 'user')
            $this->where('user = ' . "'" . $data['search'] . "'");
        elseif ($data['user_email'] == 'email')
            $this->where('email = ' . "'" . $data['search'] . "'");

        $this->limit(1);

        $query = $this->get(); //var_dump($query->row());die();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                if (password_verify($data['ans1'], $query->row()->ans1)) {
                    if (password_verify($data['ans2'], $query->row()->ans2)) {
                        if (password_verify($data['ans3'], $query->row()->ans3)) {
                            $return['user'] = $query->row()->user;
                            $return['pass'] = rand(10000, 99999);

                            $data['id'] = $query->row()->id_user;
                            $data['pass'] = password_hash($return['pass'], PASSWORD_DEFAULT);

                            $this->SaveNewPass($data);

                            $return['data'] = 'OK';
                        } else
                            $return['error'] = 'ANW3_WRONG';
                    } else
                        $return['error'] = 'ANW2_WRONG';
                } else
                    $return['error'] = 'ANW1_WRONG';
            }

            return $return;
        }
    }

    public function saveToken($id_usuario, $token)
    {
        $query = $this->where('id_user', $id_usuario)->get('user');

        if ($query->getNumRows() > 0) {
            $update_account = [
                'token' => $token
            ];

            $this->update('user', $update_account, ['id_user' => $id_usuario]);

            $return = $this->result(0, 0, $query->getRow());
        } else {
            $return = $this->result(1, 'The user does not exist.');
        }

        return $return;
    }

    public function validaToken($token)
    {
        $this->select('*');
        $this->from('user');
        $this->where('token', $token);
        $this->limit(1);

        $query = $this->get(); //var_dump($query->getRow());die();

        if ($query->getNumRows() == 1) {
            $return = $this->result(0, 0, $query->getRow());
        } else {
            $return = $this->result(1, 'EXPIRED');
        }

        return $return;
    }

    public function SaveNewPass($data)
    {
        $update_account = array(
            'pass' => $data['pass'],
            'token' => ''
        );

        $this->update('user', $update_account, array('id_user' => $data['id']));
        $return = $this->Result(0, 0);

        return $return;
    }

    public function ActivateAccount($token)
    {
        $update_account = array(
            'activate_status' => 1,
            'token' => ''
        );

        $this->update('user', $update_account, array('token' => $token));
        $return = $this->Result(0, 0);

        return $return;
    }

    public function ResetNewPass($data)
    {
        $return = $this->Login($data['user'], $data['pass']);

        if ($return['error_msg'] == '0') {
            $id = $return['data']->id_user;

            $update_account = array(
                'pass' => $data['newpass']
            );

            $this->update('user', $update_account, array('id_user' => $id));
            $return = $this->Result(0, 0);
        }

        return $return;
    }

    public function CreateAccount($data)
    {
        $this->insert('user', $data);
        $return = $this->Result(0, 0);

        return $return;
    }

    public function Logout()
    {
        $this->close();
    }
}
