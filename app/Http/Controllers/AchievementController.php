<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdateAchievementRequest;
use App\Achievement;
use DB;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achievements = Achievement::all();
        return view('admin.achievement.index')->with('achievements', $achievements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.achievement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateAchievementRequest $request)
    {
        DB::transaction(function() use ($request) {
            $user = auth()->user();
            $achievement = new Achievement($request->all());
            $user->achievement()->save($achievement);
        });
        Session::flash('alert-success', 'Berhasil menambahkan prestasi baru!');
        return redirect()->route('achievement.index');
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
    public function edit(Achievement $achievement)
    {
        return view('admin.achievement.edit')->with('achievement', $achievement);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAchievementRequest $request, Achievement $achievement)
    {
        DB::transaction(function() use ($request, $achievement) {
            $achievement->update($request->all());
        });
        Session::flash('alert-success', 'Berhasil mengupdate prestasi!');
        return redirect()->route('achievement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achievement $achievement)
    {
        DB::transaction(function() use ($achievement) {
            $achievement->delete();
        });

        Session::flash('alert-success', 'Berhasil menghapus prestasi!');
        return redirect()->route('achievement.index');
    }
}
