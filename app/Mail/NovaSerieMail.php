<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NovaSerieMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nome_serie;

    public $qte_temporadas;

    public $qte_episodios;

    /**
     * Create a new message instance.
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
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.nova-serie');
    }
}
