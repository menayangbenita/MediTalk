<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

        return match ($role) {
            'superadmin' => view('superadmin.dashboard'),
            'dokter'      => view('dokter.dashboard'),
            'laborat'     => view('laborat.dashboard'),
            'pasien'       => view('pasien.dashboard'),
        };
    }
}
