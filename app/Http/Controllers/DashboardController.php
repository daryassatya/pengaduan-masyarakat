<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
        ]);
    }
    public function mainMenu()
    {
        return view('dashboard.main-menu', [
            'title' => 'Main Menu',
        ]);
    }
}
