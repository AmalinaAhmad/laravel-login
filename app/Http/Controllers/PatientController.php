<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct()

    {
        $this->middleware('auth');
        $this->middleware('role:Patient');
    }
    public function index()
    {
        return view('patient.home');
    }
}
