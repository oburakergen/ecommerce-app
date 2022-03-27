<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use App\Models\Site\Navbar;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function __invoke(): View
    {
        return view('pages.about.index', [
            'menu' =>  Navbar::where('active','1')->get()
        ]);
    }
}
