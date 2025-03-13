<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:100',
            'email' => 'required|email|max:80|unique:users,email',
            'rekammedis' => 'required|string|max:32|unique:users,rekammedis',
            'password' => 'required|string|min:8',
            'role' => 'in:pasien,laborat,dokter,superadmin',
            'spesialis' => 'nullable|string|max:50',
            'tarif' => 'nullable|int|max:100',
            'maksimal_chat' => 'nullable|int|max:10',
            'status_chat' => 'in:Tersedia,Tidak Tersedia,Menunggu Konfirmasi',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'rekammedis' => $request->rekammedis,
            'password' => Hash::make($request->password), 
            'role' => $request->role ?? 'pasien', 
            'spesialis' => $request->spesialist,
            'tarif' => $request->tarif,
            'maksimal_chat' => $request->maksimal_chat,
            'status_chat' => $request->status_chat ?? 'Tidak Tersedia',
        ]);

        Auth::login($user);
        return redirect()->route('dashboard');
        // response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
    }
}
