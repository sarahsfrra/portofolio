<?php

namespace App\Http\Controllers;

use App\Models\Projek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjekController extends Controller
{
    public function index()
    {
        $projeks = Projek::all();
        return view('dashboard/dashboard', [
            'projeks' => $projeks
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $file = $request->file('foto_projek');
        $path = $file->store('uploads', 'public');

        $request['link_foto'] = $path ;
        Projek::create($request->toArray());

        return redirect('/dashboard')->with('success', 'Berhasil menambahkan projek');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projek $projek)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projek $projek)
    {
        return view('dashboard/perbarui', [
            'projek' => $projek
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projek $projek)
    {
        $file = $request->file('foto_projek');
        if($file) {
            $path = $file->store('uploads', 'public');

            $request['link_foto'] = $path ;
        }

        $projek->fill($request->toArray())->save();

        return redirect('/dashboard')->with('success', 'Berhasil memperbarui projek');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projek $projek)
    {

        $projek->delete();

        return redirect('/dashboard')->with('success', 'Berhasil menghapus projek');
    }
}
