<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function overview()
    {
        return view('pages.overview');
    }
}

