<?php

namespace App\Controllers;

 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PrintView extends BaseController
{
    function  __construct()
    {
        parent::__construct();
        //$this->load->model('M_Main');
    }

	function index()
	{
        $this->load->helper('General_Helper');
        $data['session']=GetSessionVars();
        $data['language']=LoadLanguage();
        $data['profile_type']=ProfileType($data['session']);

		$this->load->view("Print", $data);
	}
}

