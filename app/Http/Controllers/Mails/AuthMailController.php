<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Jobs\SendAuthMail;
use App\Models\User;
use Illuminate\Http\Request;

class AuthMailController extends Controller
{
    public function sendRegisterMail(Request $request)
    {
        $user = new User();

        $user->name = 'Railton Araujo.';
        $user->password = '123456';
        $user->email = 'teste1@gmail.com';

        $user->save();

        SendAuthMail::dispatch($user);
    }
}
