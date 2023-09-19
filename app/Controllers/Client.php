<?php 

namespace App\Controllers;

use App\Models\M_Client;
use App\Models\M_Employee;
use App\Models\M_User;
class Client extends BaseController
{
    function __construct()
    {
        parent::__construct();
        $this->ClientModel = new M_Client;
        $this->EmployeeModel = new M_Employee;
        $this->UserModel = new M_User;
    }

    public function GoUpdateClient()
    {
        if($this->session->userdata('logged_user_ehhs'))
        {
            $this->load->helper('general_helper');
            $data['session'] = GetSessionVars();//die();
            $data['language'] = LoadLanguage();
            $data['profile_type'] = ProfileType($data['session']);

            $data['go_view'] = str_replace("-","/", $this->input->post('go_view'));
            $data['go_back'] = $this->input->post('go_back');


            if($this->input->post('id')!='')
            {
                $vars = explode("-", $this->input->post('id'));
                $data['id_user'] = $vars[0];
                $data['id_person'] = $vars[1];

                $ClientModel = new M_Client;
                $UserModel = new M_User;

                if ($data['id_user'] != '')
                    $data['role'] = $UserModel->GetRoleByUserID($data['id_user']);

                if ($data['id_person'] != '')
                    $data['client'] = $ClientModel->GetClientByPersonID($data['id_person']);
            }
            else
                $data['role'] = 'patient';


            if ($data['go_view'] != '')
                return view($data['go_view'], $data);
        }
        else
        {
            print 'NO_LOGGED';
        }
    }
}