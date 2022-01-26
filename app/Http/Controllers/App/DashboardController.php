<?php

namespace Agrinesia\Http\Controllers\App;

use Illuminate\Http\Request;
use Agrinesia\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('apps.pages.dashboard');
    }
}
