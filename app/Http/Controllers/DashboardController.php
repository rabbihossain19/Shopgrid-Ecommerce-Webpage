<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Spatie\LaravelIgnition\ContextProviders\resolveUpdates;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }
}
