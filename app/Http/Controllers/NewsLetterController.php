<?php

namespace App\Http\Controllers;

use App\Http\Services\NewsLetter;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsLetterController extends Controller
{
    public function add(NewsLetter $newsletter)
    {
        request()->validate(['email' => 'required|email']);

        try {
            $newsletter->subscribe(request('email'));
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'This email could not be added to our newsletter list.'
            ]);
        }

        return redirect('/')
            ->with('success', 'You are now signed up for our newsletter!');
    }
}
