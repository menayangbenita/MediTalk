<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PenarikanDanaController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

        return match ($role) {
            'superadmin' => view('superadmin.penarikandana'),
            'dokter'      => view('dokter.penarikandana')
        };
    }
}
