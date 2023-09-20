<?php 

namespace App\Controllers;

use App\Models\M_Client;
use App\Models\M_Employee;
use App\Models\M_User;
class Client extends BaseController
{

    public function GoUpdateClient()
    {
        if($this->session->userdata('logged_user_ehhs'))
        {
            helper('general_helper');
            $data['session'] = GetSessionVars();//die();
            $data['language'] = LoadLanguage();
            $data['profile_type'] = ProfileType($data['session']);

            $data['go_view'] = str_replace("-","/", $this->request->getPost('go_view'));
            $data['go_back'] = $this->request->getPost('go_back');


            if($this->request->getPost('id')!='')
            {
                $vars = explode("-", $this->request->getPost('id'));
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