<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index (){
        if (!auth()->check()) {
            return redirect()
            ->route('login')
            ->withError('Silahkan anda harus login terlebih dahulu.');
        }
        return view ('admin.dashboard.index');
    }
}
