<?php

namespace App\Controllers;

class PrintView extends BaseController
{
    function  __construct()
    {
        //$this->load->model('M_Main');
    }

	function index()
	{
        helper('general_helper');
        $data['session']=GetSessionVars();
        $data['language']=LoadLanguage();
        $data['profile_type']=ProfileType($data['session']);

		return view("Print", $data);
	}
}

