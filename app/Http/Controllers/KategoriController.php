<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\View\View;
use Illuminate\Http\Request;


class KategoriController extends Controller
{
    public function index(): View
    {
        $kategoris = Kategori::latest()->paginate(5);
        return view('kategoris.index1', compact('kategoris'));
    }
}