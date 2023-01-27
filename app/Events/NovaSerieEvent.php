<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NovaSerieEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $nome_serie;
    public $qte_temporadas;
    public $qte_episodios;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($nome_serie, $qte_temporadas, $qte_episodios)
    {
        //
        $this->nome_serie = $nome_serie;
        $this->qte_temporadas = $qte_temporadas;
        $this->qte_episodios = $qte_episodios;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
