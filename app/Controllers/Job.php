<?php 

namespace App\Controllers;

use App\Models\M_Employee;
use App\Models\M_Care;
use App\Models\M_Main;
use App\Models\M_Job;
class Job extends BaseController
{
    function __construct()
    {
        parent::__construct();
        $this->EmployeeModel = new M_Employee;
        $this->CareModel = new M_Care;
        $this->MainModel = new M_Main;
        $this->JobModel = new M_Job;
    }

    public function GoAddJob()
    {

        $EmployeeModel = new M_Employee;
        $CareModel = new M_Care;

        if($this->session->userdata('logged_user_ehhs'))
        {
            $this->load->helper('general_helper');
            $data['session'] = GetSessionVars();//die();
            $data['language'] = LoadLanguage();
            $data['profile_type'] = ProfileType($data['session']);

            $data['go_view'] = 'job/AddJob';
            $data['go_back'] = $this->input->post('go_back');

            $data['id_employee']=$this->input->post('id_employee');

            $data['worker']=$EmployeeModel->GetAllApprovedWorkers();
            //$data['data']['care']=$this->M_Care->GetAvailableCare();//var_dump($data['available_job']);die();
            //$data['data']['show_client']=1;

            if ($data['go_view'] != '')
                return view($data['go_view'], $data);
        }
        else
        {
            print 'NO_LOGGED';
        }
    }

    public function SaveJob()
    {
        $MainModel = new M_Main;

        if($this->session->userdata('logged_user_ehhs'))
        {
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
            }
            $fields[$i] = 'id_care_schedule';
            $data['ids'] = $this->input->post('id');
            $var = explode("-", $data['ids']);

            if(sizeof($var) != 0)
            {
                $cant=sizeof($var);

                for($i=0;$i<$cant; next($var), $i++)
                {
                    $datas['id_care_schedule'] = current($var);

                    if (isset($datas['id_care_schedule']))
                    {
                        $result=$MainModel->Execute($type, $fields, $datas, $table, '');
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

    public function SaveInterestedOrNotJob()
    {
        $MainModel = new M_Main;
        $JobModel = new M_Job;
        if($this->session->userdata('logged_user_ehhs'))
        {
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
            }
            $fields[$i] = 'id_care_schedule';
            $data['ids'] = $this->input->post('id');
            $var = explode("-", $data['ids']);

            if(sizeof($var) != 0)
            {
                $cant=sizeof($var);

                for($i=0;$i<$cant; next($var), $i++)
                {
                    $datas['id_care_schedule'] = current($var);

                    if (isset($datas['id_care_schedule']))
                    {
                        $id_employee=$datas['id_employee'];
                        $id_care_schedule=$datas['id_care_schedule'];

                        $interest_result=$JobModel->GetInterestedJobsByEmployeeIDCareScheduleID($id_employee, $id_care_schedule);
                        if($interest_result['error_code']==1)
                        {
                            $result=$MainModel->Execute($type, $fields, $datas, $table, '');
                            if($result['error_msg']=='0' && $type=='INSERT')
                                print $result['data']['last_id'];
                            elseif($result['error_msg']=='0' && $type=='UPDATE')
                                print $datas['id'];
                            else
                                print $result['error_msg'];
                        }
                        else
                        {
                            print $interest_result['data'][0]->id_employee_interested;
                        }
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

    public function DeleteInterestedJob()
    {
        $JobModel = new M_Job;
        if($this->session->userdata('logged_user_ehhs'))
        {
            $id_employee = $this->input->post('id_employee');
            $ids = $this->input->post('id');
            $var = explode("-", $ids);

            if(sizeof($var) != 0)
            {
                $cant=sizeof($var);

                for($i=0;$i<$cant; next($var), $i++)
                {
                    $id_care_schedule = current($var);

                    if ($id_employee!='' && $id_care_schedule!='')
                    {
                        $result=$JobModel->DeleteInterestedJob($id_employee, $id_care_schedule);
                        print $result['error_code'];
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