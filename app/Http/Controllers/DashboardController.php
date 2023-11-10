<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['totalResumes'] = Resume::count();
        return view('dashboard',$data);
    }
}
