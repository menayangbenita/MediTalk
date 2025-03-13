<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\KonsultasiNotification;
use App\Events\KonsultasiDimulai;

class KirimNotifikasiKonsultasi
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(KonsultasiDimulai $event)
    {
        $konsultasi = $event->konsultasi;

        $konsultasi->dokter->notify(new KonsultasiNotification($konsultasi));
        $konsultasi->pasien->notify(new KonsultasiNotification($konsultasi));

        broadcast(new KonsultasiDimulai($event->konsultasi));
    }
}
