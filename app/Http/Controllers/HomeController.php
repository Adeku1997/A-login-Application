<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * show the home page
     *
     * @return Application|Factory|View
     */
    public function showHome()
    {
        return view('home');
    }


}
