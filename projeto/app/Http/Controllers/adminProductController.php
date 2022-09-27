<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminProductController extends Controller
{
    public function index()
    {
        return view(view:'admin.product');
    }
    public function edit()
    {
        return view(view:'admin.product_edit');
    }
}
