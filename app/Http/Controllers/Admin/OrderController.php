<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Order Lists';
        return view('admin.orders.index', compact('data'));
    }
}
