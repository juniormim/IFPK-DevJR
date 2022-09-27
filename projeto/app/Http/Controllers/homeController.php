<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;

class homeController extends Controller
{
    public function index()
    {
        return view(view:'home');
    }
}