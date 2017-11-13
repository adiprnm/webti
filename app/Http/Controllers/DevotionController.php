<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Devotion;
use DB;

class DevotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devotions = Devotion::all();
        return view('admin.devotion.index')->with('devotions', $devotions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.devotion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::transaction(function () use($request) {
            $user = auth()->user();
            $devotion = new Devotion($request->all());
            $user->devotion()->save($devotion);
        });
        Session::flash('alert-success', 'Pengabdian berhasil ditambahkan!');
        return redirect()->route('devotion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Devotion $devotion)
    {
        return view('admin.devotion.edit')->with('devotion', $devotion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devotion $devotion)
    {
        DB::transaction(function () use($request, $devotion) {
            $devotion->update($request->all());
        });
        Session::flash('alert-success', 'Berhasil mengupdate pengabdian!');
        return redirect()->route('devotion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devotion $devotion)
    {
        DB::transaction(function () use($devotion) {
            $devotion->delete();
        });
        Session::flash('alert-success', 'Berhasil menghapus pengabdian!');
        return redirect()->route('devotion.index');
    }
}
