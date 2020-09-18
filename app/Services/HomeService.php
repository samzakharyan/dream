<?php


namespace App\Services;

use App\Contracts\HomeInterface;
use Illuminate\Support\Facades\App;

class HomeService implements HomeInterface
{
    public function changeLocale($locale)
    {
        $availableLocales = ['ru', 'en', 'hy'];
        if (!in_array($locale, $availableLocales)) {
            $locale = config('app.locale');
        }

        session(['locale' => $locale]);

        App::setLocale($locale);

        return true;
    }
}
