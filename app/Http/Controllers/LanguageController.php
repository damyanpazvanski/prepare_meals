<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{

    /**
     * @param Request $request
     * @param string $language
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function change(Request $request, $language = '')
    {
        $domain = rtrim(config('app.url'), '/');

        dd($language . '/' . substr(url()->previous(), strlen($domain) + 1), $request->segments());

        if (file_exists(resource_path("lang/$language"))) {

            $domain = rtrim(config('app.url'), '/');

            return redirect($language . '/' . substr(url()->previous(), strlen($domain) + 1));
        }

        return back();
    }
}
