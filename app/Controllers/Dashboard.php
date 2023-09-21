<?php

namespace App\Controllers;

use App\Models\M_Dashboard;
use App\Models\M_Care;
use App\Models\M_Employee;

class Dashboard extends BaseController
{

    public function GoDashboard($view = "dashboard/Dashboard", $msg = "", $success = "", $warning = "", $error = "")
    {
        $data['msg'] = $msg;
        $data['success'] = $success;
        $data['warning'] = $warning;
        $data['error'] = $error;
        $data['view'] = $view;


        $EmployeeModel = new M_Employee;
        $CareModel = new M_Care;

       /* if ($data['session']['rol'] == 'asist') {
            $data['pending_care'] = $CareModel->GetCareByApproved(0);
            $data['pending_employee'] = $EmployeeModel->GetWorkerByApproved(0); //var_dump($data['pending_employee']);
            $data['available_care'] = $CareModel->GetAvailableCare();
        } elseif ($data['session']['rol'] == 'worker') {
            $data['available_care'] = $CareModel->GetAvailableCare();
            $data['approved'] = $EmployeeModel->GetApprovedByPersonID($data['session']['id_person']);
        }
        /*elseif ($data['session']['rol']=='patient')
            $data['no_filled']=$this->M_Main->CheckClient($data);
        else
            $data['no_filled']=$this->M_Main->CheckProfile($data);*/

        //echo $data['section_auth'];
        return view($view, $data);
    }

    public function GoAboutUs($view = "dashboard/Dashboard", $msg = "", $success = "", $warning = "", $error = "")
    {
        $data['msg'] = $msg;
        $data['success'] = $success;
        $data['warning'] = $warning;
        $data['error'] = $error;
        $data['view'] = $view;

        helper('general_helper');
        $data['session'] = GetSessionVars();
        $data['language'] = LoadLanguage();
        $data['profile_type'] = ProfileType($data['session']);

        //echo $data['section_auth'];
        return view($view, $data);
    }
}
