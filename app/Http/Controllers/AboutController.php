<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        return 'Nama: Desi Karmila, NIM: 123456789';
    }
}
