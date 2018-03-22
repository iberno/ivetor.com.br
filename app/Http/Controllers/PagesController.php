<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;
use App\Http\Requests\EmailPostRequest;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(EmailPostRequest $data)
    {
        $email = Email::create([
            'email' => $data->email,
        ]);
        
        return redirect()->route('index')
                ->with('message', 'Obrigado por cadastar seu email!');
    }
}
