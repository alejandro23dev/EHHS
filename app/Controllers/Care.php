<?php

namespace App\Controllers;

use App\Models\M_Employee;
use App\Models\M_Client;
use App\Models\M_Main;
class Care extends BaseController
{

    public function GoAddCare()
    {
        $ClientModel = new M_Client;

        if($this->session->userdata('logged_user_ehhs'))
        {
            helper('general_helper');
            $data['session'] = GetSessionVars();//die();
            $data['language'] = LoadLanguage();
            $data['profile_type'] = ProfileType($data['session']);

            $data['go_view'] = 'care/AddCare';
            $data['go_back'] = $this->request->getPost('go_back');

            $data['id_client']=$this->request->getPost('id_client');

            
            $data['client']= $ClientModel->GetAllActiveClients();

            if ($data['go_view'] != '')
                return view($data['go_view'], $data);
        }
        else
        {
            print 'NO_LOGGED';
        }
    }

    public function ApproveRejectCare()
    {

        

        if($this->session->userdata('logged_user_ehhs'))
        {
            $MainModel = new M_Main;
            $i=0;
            foreach($_POST as $field_name => $value)
            {
                if($field_name!='table' && $field_name!='type' && $field_name!='field_id' && $field_name!='id') {
                    $fields[$i] = $field_name;
                    $value = $this->security->xss_clean($value);
                    $value = html_escape($value);
                    $datas[$field_name] = $value;

                    $i++;
                }
                elseif($field_name=='table')
                    $table=$value;
                elseif($field_name=='type')
                    $type=$value;
                elseif($field_name=='field_id')
                    $field_id=$value;
            }

            $data['ids'] = $this->request->getPost('id');
            $var = explode("-", $data['ids']);

            if(sizeof($var) != 0)
            {
                $cant=sizeof($var);

                for($i=0;$i<$cant; next($var), $i++)
                {
                    $datas['id'] = current($var);

                    if (isset($datas['id']))
                    {
                        $result=$MainModel->Execute($type, $fields, $datas, $table, $field_id);
                        if($result['error_msg']=='0' && $type=='INSERT')
                            print $result['data']['last_id'];
                        elseif($result['error_msg']=='0' && $type=='UPDATE')
                            print $datas['id'];
                        else
                            print $result['error_msg'];
                    }
                    else
                    {
                        print 'EMPTY_ID';
                    }
                }
            }
            else
            {
                print 'EMPTY_TABLE';
            }
        }
        else
        {
            print 'NO_LOGGED';
        }
    }
}