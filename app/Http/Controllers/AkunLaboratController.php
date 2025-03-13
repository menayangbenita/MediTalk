<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AkunLaboratController extends Controller
{
    public function index()
    {
        $laborats = User::where('role', 'laborat')->get();
        return view('superadmin.laborat', compact('laborats'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'in:pasien,laborat,dokter,superadmin'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = $request->except('password');
        $data['password'] = Hash::make($request->password);
        $data['role'] = $request->role ?? 'laborat';
        $data['status_chat'] = $request->status_chat ?? 'Tidak Tersedia';

        User::create($data);

        return redirect()->route('akunlaborat')->with('success', 'Laborat berhasil ditambahkan!');
    }

    public function update(Request $request, User $laborat)
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

        $laborat->update($data);

        return redirect()->route('akunlaborat')->with('success', 'Data laborat berhasil diperbarui!');
    }

    public function destroy(User $laborat)
    {
        if (!$laborat) {
            return redirect()->route('akunlaborat')->with('error', 'Laborat tidak ditemukan!');
        }

        $laborat->delete();

        return redirect()->route('akunlaborat')->with('success', 'Laborat berhasil dihapus!');
    }
}
