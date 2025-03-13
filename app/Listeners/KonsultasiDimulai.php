<?

namespace App\Events;

use App\Models\Konsultasi;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class KonsultasiDimulai
{
    use Dispatchable, SerializesModels;

    public function __construct(public Konsultasi $konsultasi)
    {
    }
}
