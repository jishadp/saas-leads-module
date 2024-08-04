<?php

namespace Jishadp\SaasLeadModule\Controllers;

use Illuminate\Http\Request;

class LeadController
{
    public function index(){
        return view('leadviews::index');
    }
}
