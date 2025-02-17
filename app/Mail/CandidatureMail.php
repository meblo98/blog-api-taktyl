<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Candidature;

class CandidatureMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $candidature;

    public function __construct(Candidature $candidature)
    {
        $this->candidature = $candidature;
    }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
                    ->subject("Nouvelle Candidature : " . $this->candidature->poste)
                    ->view('emails.candidature')
                    ->with([
                        'nom_complet' => $this->candidature->nom_complet,
                        'poste' => $this->candidature->poste,
                        'cv' => asset('storage/' . $this->candidature->cv),
                    ]);
    }
}
