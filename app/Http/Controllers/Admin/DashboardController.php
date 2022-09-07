<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\Record;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    public function dashboard()
    {
        $registros = Record::count();

        return view('admin.dashboard.index', compact('registros'));
    }
}
