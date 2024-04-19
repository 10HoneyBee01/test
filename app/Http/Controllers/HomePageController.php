<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\ApplicationApplication;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomePageController extends Controller
{
    //
    public function index(Request $request): Factory|View|Application
    {
        return view('Homepage');
    }
}
