<?php

namespace App\Controllers;

class Portal extends BaseController
{
    public function index()
    {
        return view('auth/v_portal');
    }
}
