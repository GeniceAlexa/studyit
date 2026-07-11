<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;

class DashboardController extends Controller
{
    public function index()
    {
        $aktivitas = Aktivitas::latest()
            ->limit(5)
            ->get();

        return view('dashboard', compact('aktivitas'));
    }
}