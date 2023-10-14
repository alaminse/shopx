<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data['page_title'] = 'Dashboard';
        return view('admin.index', compact('data'));
    }
}
