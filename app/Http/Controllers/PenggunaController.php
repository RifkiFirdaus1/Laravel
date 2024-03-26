<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $penggunas = Pengguna::latest()->paginate(5);
        return view('penggunas.index4', compact('penggunas'));
    }
}