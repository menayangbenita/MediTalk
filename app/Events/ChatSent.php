<?php

namespace App\Events;

use App\Models\Messages;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(public Messages $chat)
    {
    }

    public function broadcastOn(): array
    {
        return [new Channel('chat.' . $this->chat->konsultasi_id)];
    }

    public function broadcastAs(): string
    {
        return 'chat.sent';
    }

    public function broadcastWith(): array
    {
        return [
            'message' => $this->chat->message,
            'sender' => $this->chat->sender->name,
            'sender_id' => $this->chat->sender_id,
            'time' => $this->chat->created_at->diffForHumans(),
        ];
    }
}
