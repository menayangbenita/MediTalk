<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        // $dokters = User::where('role', 'dokter')->get();

        $dokters = User::where('role', 'dokter')
            ->orderByRaw("
        CASE 
            WHEN status_chat = 'Tersedia' THEN 1
            WHEN status_chat = 'Sibuk' THEN 2
            WHEN status_chat = 'Tidak Tersedia' THEN 3
            ELSE 4
        END
    ")->get();

        return match ($role) {
            'dokter' => view('dokter.konsultasi'),
            'pasien' => view('pasien.konsultasi', compact('dokters')),
        };
    }
}
