<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AkunPasienController extends Controller
{
    public function index()
    {
        $pasiens = User::where('role', 'pasien')->get();
        return view('superadmin.pasien', compact('pasiens'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'rekammedis' => 'required|string|max:32|unique:users,rekammedis',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'in:pasien,laborat,dokter,superadmin'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = $request->except('password');
        $data['password'] = Hash::make($request->password);
        $data['role'] = $request->role ?? 'pasien';
        $data['status_chat'] = $request->status_chat ?? 'Tidak Tersedia';

        User::create($data);

        return redirect()->route('akunpasien')->with('success', 'Pasien berhasil ditambahkan!');
    }

    public function update(Request $request, User $pasien)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'in:pasien,laborat,dokter,superadmin',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = $request->except('password');

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $pasien->update($data);

        return redirect()->route('akunpasien')->with('success', 'Data pasien berhasil diperbarui!');
    }

    public function destroy(User $pasien)
    {
        if (!$pasien) {
            return redirect()->route('akunpasien')->with('error', 'Pasien tidak ditemukan!');
        }

        $pasien->delete();

        return redirect()->route('akunpasien')->with('success', 'Pasien berhasil dihapus!');
    }
}
