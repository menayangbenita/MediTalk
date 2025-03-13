<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        $laborats = User::where('role', 'laborat')->get();
    
        return match ($role) {
            'dokter' => view('dokter.profil', compact('laborats')),
            'laborat' => view('laborat.profil'),
            'pasien'      => view('pasien.profil')
        };
    }

    public function dokter($id)
    {
        $role = Auth::user()->role;
        $dokter = User::where('role', 'dokter')->findOrFail($id);
    
        return view('pasien.profildokter', compact('dokter'));
    }
}
