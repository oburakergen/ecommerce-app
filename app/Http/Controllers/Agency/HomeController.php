<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use App\Models\Setting\Currency;
use App\Models\Setting\Language;
use App\Models\Site\Navbar;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function __invoke(): View
    {
        return view('pages.home.index',[
            'menu' => Navbar::where('active','1')->get(),
            'language' => (Language::where('active','1')->get()),
            'currency' => (Currency::where('active','1')->get()),
        ]);
    }
}
