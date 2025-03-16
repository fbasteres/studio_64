<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function servicios():View
    {
        return view('pages.servicios');
    }

    public function informacion():View
    {
        return view('pages.informacion');
    }

    public function locacion():View
    {
        return view('pages.locacion');
    }

    public function nosotros():View
    {
        return view('pages.nosotros');
    }

    public function contacto():View
    {
        return view('pages.contacto');
    }

    public function planes():View
    {
        return view('pages.planes');
    }

    public function comprar():View
    {
        return view('pages.comprar');
    }

}
