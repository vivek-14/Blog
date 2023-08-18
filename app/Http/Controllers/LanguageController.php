<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;


class LanguageController extends Controller
{
    public function changeLanguage($locale): RedirectResponse
    {
        if (in_array($locale, config('app.locales'))) {
            session()->put('locale', $locale);
        }

        return redirect()->back();
    }
}
