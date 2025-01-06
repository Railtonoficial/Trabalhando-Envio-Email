<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class RegisterEmail extends Mailable
{
    private $user;

    use Queueable, SerializesModels;

    public function __construct(User $qualquerNome)
    {
        $this->user = $qualquerNome;
    }

    public function build()
    {
        $this->subject('Assunto do E-mail');
        $this->from('reply@gmail.com', 'Reply Bot');
        $this->replyTo('reply@gmail.com');

        return $this->view('Mail.registerMail', [
            'nome' => $this->user->name
        ])->attach(__DIR__ . '/../../public/imagem.png');
    }
}
