<?php

use App\Models\Auth;
use App\Models\M_Main;

function GetSessionVars()
{
    $data='';
    $my_instance = \Config\Services::request();
    

    if (!session()->has('language')) {
        $session_lang = ['lang' => 'english'];
        session()->set('language', $session_lang);
    }

    $session_lang = session()->get('language');
    if (isset($session_lang['caption_language'])) {
        $data['caption_language'] = $session_lang['caption_language'];
    } else {
        $data['caption_language'] = 'english';
    }

    $data['email_from'] = EMAIL_FROM;
    $data['email_from_name'] = EMAIL_FROM_NAME;
    $data['email_test_to'] = EMAIL_FROM_TO;
    $data['email_test_staff_to'] = EMAIL_FROM_STAFF_TO;

    $data['id_user'] = '';
	$data['user'] = '';
	$data['email'] = '';
	$data['rol'] = '';
    $data['section_auth'] = '/authentication/Login.php';
    $data['id_person'] = '';
	$data['no_filled']=array();

    if($$my_instance->session->userdata('logged_user_ehhs'))
    {
        $session_data = $$my_instance->session->userdata('logged_user_ehhs');

        if (isset($session_data['id_user']))
        {
            $data['id_user'] = $session_data['id_user'];
            $data['user'] = $session_data['user'];
            $data['email'] = $session_data['email'];
            $data['rol'] = $session_data['rol'];
            $data['section_auth'] = '';
            $data['id_person'] = $session_data['id_person'];

            $MainModel = new M_Main;//print $data['rol'];

            if ($data['rol']=='employee')
                $data['no_filled']=$MainModel->CheckEmployee($data);
            elseif ($data['rol']=='patient')
                $data['no_filled']=$MainModel->CheckClient($data);
            else
                $data['no_filled']=$MainModel->CheckProfile($data);
        }
        else
        {
            
            $my_instance->session->unset('logged_user_ehhs');
$AuthModel = new Auth;
$my_instance = $AuthModel->logout();
        }
    }

    return $data;
}

function UpdateSessionVars($key, $value)
{
    $data='';
    $my_instance = \Config\Services::request();

    if($my_instance->session->userdata('logged_user_ehhs'))
    {
        $session_data = $my_instance->session->userdata('logged_user_ehhs');

        if (isset($session_data['id_user']))
        {
            $data['id_user'] = $session_data['id_user'];
            $data['user'] = $session_data['user'];
            $data['email'] = $session_data['email'];
            $data['rol'] = $session_data['rol'];
            $data['section_auth'] = '';
            $data['id_person'] = $session_data['id_person'];
        }

        if($key=='id_user')$data['id_user'] = $value;
        if($key=='user')$data['user'] = $value;
        if($key=='email')$data['email'] = $value;
        if($key=='rol')$data['rol'] = $value;
        if($key=='section_auth')$data['section_auth'] = $value;
        if($key=='id_person')$data['id_person'] = $value;

        $my_instance->load->model('M_Main');

        if ($data['rol']=='employee')
            $data['no_filled']=$my_instance->M_Main->CheckEmployee($data);
        elseif ($data['rol']=='patient')
            $data['no_filled']=$my_instance->M_Main->CheckClient($data);
        else
            $data['no_filled']=$my_instance->M_Main->CheckProfile($data);

        $my_instance->session->set_userdata('logged_user_ehhs', $data);//var_dump($data);
    }
}

function LoadLanguage()
{
    $my_instance = \Config\Services::request();

    if(!$my_instance->session->userdata('language'))
    {
        $session_lang = array('lang' => 'english');
        $my_instance->session->set_userdata('language', $session_lang);
    }

    $session_lang = $my_instance->session->userdata('language');
    $language = $session_lang['lang'];

    $my_instance->lang->load('form_label', $language);
    $data=$my_instance->lang->language;//var_dump($data);
    return $data;
}

function ProfileType($session)
{
    $data = [];
    $my_instance = \Config\Services::request();
    $access_profile = $session['rol'];
    $id_person = $session['id_person'];

    if ($access_profile == 'worker') {
        $percent_result = $my_instance->M_Main->GetCompletedPercentByPersonID($id_person);

        if ($percent_result['error_code'] == 0) {
            $data['percent'] = $percent_result['data']->completed_percent;
        } else {
            $data['percent'] = 0;
        }

        $data['available_jobs'] = 3;
        $data['profile_type'] = $access_profile;
    } elseif ($access_profile == 'client') {
        $data['profile_type'] = $access_profile;
    } elseif ($access_profile == 'asist') {
        $data['available_jobs'] = 5;
        $data['profile_type'] = $access_profile;
    } elseif ($access_profile == 'admin') {
        $data['available_jobs'] = 5;
        $data['profile_type'] = $access_profile;
    }

    return $data;
}