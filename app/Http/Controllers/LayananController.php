<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function disdukcapil()
    {
        return view('fitur.layanan.disdukcapil', [
            'title' => 'Pelayanan Disdukcapil',
            'slug' => 'pelayanan-disdukcapil'
        ]);
    }
}
