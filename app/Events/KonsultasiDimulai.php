<?php

namespace App\Events;

use App\Models\Konsultasi;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class KonsultasiDimulai
{
    use Dispatchable, SerializesModels;

    public $konsultasi;

    public function __construct(Konsultasi $konsultasi)
    {
        $this->konsultasi = $konsultasi;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        return new Channel('konsultasi');
    }

    public function broadcastWith()
    {
        return [
            'message' => 'Konsultasi dimulai dengan dokter ' . $this->konsultasi->dokter->nama,
            'konsultasi_id' => $this->konsultasi->id
        ];
    }
}
