<?php

namespace App\Http\Controllers;

use App\Events\ChatSent;
use App\Models\Messages;
use App\Models\Konsultasi;
use Illuminate\Support\Str;
use App\Http\Controllers\KonsultasiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'konsultasi_id' => 'required|exists:konsultasis,id',
            'message' => 'required|string',
        ]);

        $chat = Messages::create([
            'konsultasi_id' => $request->konsultasi_id,
            'sender_id' => Auth::id(),
            'message' => $request->message,
        ]);

        broadcast(new ChatSent($chat))->toOthers();

        return response()->json(['message' => 'Chat terkirim']);
    }

    public function index($konsultasi_id)
    {
        $konsultasis = Konsultasi::findOrFail($konsultasi_id);
        $role = Auth::user()->role;
        return match ($role) {
            'dokter'      => view('dokter.chat', compact('konsultasi')),
            'pasien'       => view('pasien.chat', compact('konsultasis')),
        };
    }

    public function getMessages(Request $request)
    {
        $incoming_id = $request->input('receiver_id');
        $outgoing_id = Auth::id(); 

        $messages = Messages::where(function ($query) use ($incoming_id, $outgoing_id) {
            $query->where('sender_id', $outgoing_id)
                ->where('receiver_id', $incoming_id);
        })
            ->orWhere(function ($query) use ($incoming_id, $outgoing_id) {
                $query->where('sender_id', $incoming_id)
                    ->where('receiver_id', $outgoing_id);
            })
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json([
            'messages' => $messages,
            'auth_id' => $outgoing_id, 
        ]);
    }


    // Menyimpan pesan ke database
    public function sendMessage(Request $request)
    {
        $request->validate([
            'sender_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ]);

        Messages::create([
            // 'id' => Str::uuid(),
            'sender_id' => Auth::id(),
            'konsultasi_id' => $request->konsultasi_id,
            'receiver_id' => $request->receiver_id,
            'message' => $request->message
        ]);

        return redirect()->route('konsultasi.chat', ['konsultasi_id' => $request->konsultasi_id]);
    }
}
