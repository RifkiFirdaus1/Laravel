<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\View\View;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $keranjangs = Keranjang::latest()->paginate(5);
        return view('keranjangs.index3', compact('keranjangs'));
    }
}