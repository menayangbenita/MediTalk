<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AkunDokterController extends Controller
{
    public function index()
    {
        $dokters = User::where('role', 'dokter')->get();
        return view('superadmin.dokter', compact('dokters'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'in:pasien,laborat,dokter,superadmin',
            'spesialis' => 'required|string|max:255',
            'alumnus' => 'required|string|max:255',
            'str' => 'required|unique:users,str',
            'tempat_praktik' => 'required|string|max:255',
            'lama_praktik' => 'required|integer',
            'tarif' => 'required|integer',
            'maksimal_chat' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status_chat' => 'nullable|string|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = $request->except('password', 'foto');
        $data['password'] = Hash::make($request->password);
        $data['role'] = $request->role ?? 'dokter';
        $data['status_chat'] = $request->status_chat ?? 'Tidak Tersedia';

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('dokter_foto', 'public');
        }

        User::create($data);

        return redirect()->route('akundokter')->with('success', 'Dokter berhasil ditambahkan!');
    }

    public function update(Request $request, User $dokter)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'in:pasien,laborat,dokter,superadmin',
            'spesialis' => 'required|string|max:255',
            'alumnus' => 'required|string|max:255',
            'str' => 'required|unique:users,str',
            'tempat_praktik' => 'required|string|max:255',
            'lama_praktik' => 'required|integer',
            'tarif' => 'required|integer',
            'maksimal_chat' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status_chat' => 'nullable|string|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = $request->except('password', 'foto');

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        if ($request->hasFile('foto')) {
            if ($dokter->foto) {
                Storage::disk('public')->delete($dokter->foto);
            }
            $data['foto'] = $request->file('foto')->store('dokter_foto', 'public');
        }

        $dokter->update($data);

        return redirect()->route('akundokter')->with('success', 'Dokter berhasil diperbarui!');
    }

    public function destroy(User $dokter)
    {
        if (!$dokter) {
            return redirect()->route('akundokter')->with('error', 'Dokter tidak ditemukan!');
        }

        if ($dokter->foto) {
            Storage::disk('public')->delete($dokter->foto);
        }

        $dokter->delete();

        return redirect()->route('akundokter')->with('success', 'Dokter berhasil dihapus!');
    }
}
