<?php

namespace Jishadp\SaasLeadModule\Controllers;

use App\DataTables\User\LeadDataTable;
use Illuminate\Http\Request;
use Jishadp\SaasLeadModule\Models\Lead;

class LeadController
{
    public function index(LeadDataTable $dataTable){
        return $dataTable->render('leads::index');
    }
    public function new(){
        return view('leads::new');
    }
    public function save(Request $request){
        Lead::create([
            'first_name'    => $request->first_name,
            'last_name'    => $request->last_name,
            'mobile'    => $request->mobile,
            'email'    => $request->email,
        ]);
        return redirect()->route('saas.leads.index')->with('message','Leas Created Successfully');
    }
}
