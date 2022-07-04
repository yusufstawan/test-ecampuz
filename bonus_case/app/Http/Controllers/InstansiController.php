<?php

namespace App\Http\Controllers;

use App\Instansi;
use Illuminate\Http\Request;

class InstansiController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth')->except('index');
        $this->middleware('auth')->only('create', 'edit', 'update', 'store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instansi = Instansi::all();
        return view('instansi.index', compact('instansi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instansi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'instansi' => 'required',
            'deskripsi' => 'required',
        ]);

        Instansi::create([
            'instansi' => $request['instansi'],
            'deskripsi' => $request['deskripsi'],
        ]);

        return redirect('/instansi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instansi = Instansi::find($id);
        return view('instansi.show', compact('instansi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instansi = Instansi::find($id);
        return view('instansi.edit', compact('instansi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'instansi' => 'required',
            'deskripsi' => 'required',
        ]);

        Instansi::where('id', $id)->update([
            'instansi' => $request['instansi'],
            'deskripsi' => $request['deskripsi'],
        ]);

        return redirect('/instansi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Instansi::destroy($id);
        return redirect('/instansi');
    }
}
