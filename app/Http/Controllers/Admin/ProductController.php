<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Product Lists';
        return view('admin.product.index', compact('data'));
    }
}
