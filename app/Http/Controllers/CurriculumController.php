<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdateCurriculumRequest;
use App\Curriculum;
use App\Semester;
use DB;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curriculums = Curriculum::with('semester')->get();
        return view('admin.curriculum.index')->with('curriculums', $curriculums);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semesters = Semester::all();
        return view('admin.curriculum.create')->with('semesters', $semesters);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateCurriculumRequest $request)
    {
        DB::transaction(function () use($request) {
            $user = auth()->user();
            $curriculum = new Curriculum($request->all());
            $user->curriculum()->save($curriculum);
        });
        Session::flash('alert-success', 'Berhasil menambahkan kurikulum baru!');
        return redirect()->route('curriculum.index');
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
    public function edit(Curriculum $curriculum)
    {
        $semesters = Semester::all();
        return view('admin.curriculum.edit')->with(['semesters' => $semesters, 'curriculum' => $curriculum]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCurriculumRequest $request, Curriculum $curriculum)
    {
        DB::transaction(function() use($request, $curriculum) {
            $curriculum->update($request->all());
        });
        Session::flash('alert-success', 'Kurikulum berhasil diupdate!');
        return redirect()->route('curriculum.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculum $curriculum)
    {
        DB::transaction(function() use ($curriculum) {
            $curriculum->delete();
        });
        Session::flash('alert-success', 'Kurikulum berhasil dihapus!');
        return redirect()->route('curriculum.index');
    }
}
