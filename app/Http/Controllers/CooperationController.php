<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Cooperation;
use DB;


class CooperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cooperations = Cooperation::all();
        return view('admin.cooperation.index')->with('cooperations', $cooperations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cooperation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cooperation = DB::transaction(function () use($request) {
            $user = auth()->user();
            $cooperation = new Cooperation($request->all());
            $user->cooperation()->save($cooperation);
            return $cooperation;
        });
        $request->session()->flash('alert-success', 'Berhasil menambahkan kerjasama baru!');
        return redirect()->route('coop.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cooperation $coop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cooperation $coop)
    {
        return view('admin.cooperation.edit')->with('cooperation', $coop);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cooperation $coop)
    {
        DB::transaction(function () use($request, $coop) {
            $coop->update($request->all());
            return $coop;
        });
        $request->session()->flash('alert-success', 'Berhasil mengupdate kerjasama!');
        return redirect()->route('coop.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cooperation $coop)
    {
        DB::transaction(function () use($coop) {
            $coop->delete();
        });
        Session::flash('alert-success', 'Berhasil menghapus kerjasama!');
        return redirect()->back();
    }
}
