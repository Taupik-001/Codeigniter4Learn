<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view("v_login/index");
    }
}
