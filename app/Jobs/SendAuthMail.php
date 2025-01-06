<?php

namespace App\Jobs;

use App\Mail\RegisterEmail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendAuthMail implements ShouldQueue
{
    private $user;

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $registerEmail = new RegisterEmail($this->user);

        //return $registerEmail;

        Mail::to('railton@gmail.com')
            ->cc('railton@gmail.com')
            ->bcc('railton@gmail.com')
            ->send($registerEmail);
    }
}
