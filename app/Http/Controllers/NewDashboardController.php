<?php

namespace App\Http\Controllers;

class NewDashboardController extends Controller
{
    public function index()
    {
        return view('new-dashboard.index', [
            'title' => 'Dashboard',
        ]);
    }
}