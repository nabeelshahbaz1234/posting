<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
class adminController extends Controller
{
    public function dashboard()
    {
        session::put('page', 'dashboard');
        return view('admin.admin_dashboard');
    }
}
