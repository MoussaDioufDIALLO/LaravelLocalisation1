<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\SUpport\Facades\App; 


class LangController extends Controller
{
    public function index()
    {
        return view('lang'); 
    }
    public function change(Request $request): RedirectResponse
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return redirect()->back();
    }
}
