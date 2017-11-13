<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Research;
use DB;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $researches = Research::all();
        return view('admin.research.index')->with('researches', $researches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.research.create');
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
            $research = new Research($request->all());
            $user->research()->save($research);
        });
        Session::flash('alert-success', 'Berhasil menambahkan penelitian baru!');
        return redirect()->route('research.index');
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
    public function edit(Research $research)
    {
        return view('admin.research.edit')->with('research', $research);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Research $research)
    {
        DB::transaction(function () use ($request, $research){
            $research->update($request->all());
        });
        Session::flash('alert-success', 'Berhasil mengupdate penelitian!');
        return redirect()->route('research.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Research $research)
    {
        DB::transaction(function() use($research) {
            $research->delete();
        });
        Session::flash('alert-success', 'Berhasil menghapus penelitian!');
        return redirect()->route('research.index');
    }
}
