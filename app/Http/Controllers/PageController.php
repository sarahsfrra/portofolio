<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projek;

class PageController extends Controller
{
    public function home()
    {
        $projeks = Projek::all();

        return view('home', [
            'projeks' => $projeks
        ]);
    }

    public function dashboard()
    {

    }

    public function tambah()
    {
        return view('dashboard/tambah');
    }
}
