<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RekamMedis;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        $rekammedispasien = RekamMedis::where('pasien_id', Auth::user()->id)
        ->orderBy('tanggal', 'desc')
        ->take(3)
        ->get(); 

        return match ($role) {
            'superadmin' => view('superadmin.dashboard'),
            'dokter'     => view('dokter.dashboard'),
            'laborat'    => view('laborat.dashboard'),
            'pasien'     => view('pasien.dashboard', compact('rekammedispasien'))
        };
    }
}
