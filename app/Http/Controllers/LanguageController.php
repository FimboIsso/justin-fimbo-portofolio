<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Switch application language
     */
    public function switch($locale)
    {
        // Check if the locale is supported
        if (in_array($locale, ['en', 'fr'])) {
            // Store the selected language in session
            Session::put('locale', $locale);

            // Set the application locale
            App::setLocale($locale);
        }

        return back();
    }
}
