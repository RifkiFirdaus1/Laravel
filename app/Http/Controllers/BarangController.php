<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\View\View;
use Illuminate\Http\Request;


class BarangController extends Controller
{
    public function index(): View
    {
        $barangs = Barang::latest()->paginate(5);
        return view('barangs.index2', compact('barangs'));
    }
}