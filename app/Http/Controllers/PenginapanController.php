<?php

namespace App\Http\Controllers;

use App\Models\Penginapan;
use App\Http\Requests\StorePenginapanRequest;
use App\Http\Requests\UpdatePenginapanRequest;

class PenginapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Penginapan::all();
        $title = "Penginapan";

        return view('viewall', compact(['datas', 'title']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePenginapanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenginapanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penginapan  $penginapan
     * @return \Illuminate\Http\Response
     */
    public function show($penginapan)
    {
        $datas = Penginapan::findorFail($penginapan+1);
        $title = "Penginapan";

        return view('viewid', compact(['datas', 'title']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penginapan  $penginapan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penginapan $penginapan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenginapanRequest  $request
     * @param  \App\Models\Penginapan  $penginapan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenginapanRequest $request, Penginapan $penginapan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penginapan  $penginapan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penginapan $penginapan)
    {
        //
    }
}
