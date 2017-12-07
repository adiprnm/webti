<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Lecturer;
use Image;
use DB;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $lecturer_list = DB::table('lecturer_summaries')->get();
        $lecturers = Lecturer::all();
        return view('admin.lecturer.index')->with('lecturers', $lecturers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lecturer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function fit($image, $width, $height)
    {
        return Image::make($image->getRealPath())
            ->fit($width, $height);
    }
    
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $user = auth()->user();
            $image = $request->file('lecturer_photo');
            $fileName = uniqid() . '_' . $image->getClientOriginalName();
            $thumbnailName = 'thumb_' . $fileName;

            $thumbnail = $this->fit($image, 90, 120)
                ->save(public_path('thumbnails') . '/' . $thumbnailName);
            
            $realImage = $this->fit($image, 120, 150)
                ->save(public_path('normal_picts') . '/' . $fileName);
            
            $lecturer = new Lecturer($request->except(['lecturer_photo', 'education', 'research_field']));
            $lecturer->lecturer_photo = $fileName;
            $user->lecturer()->save($lecturer);
            $lecturer->save();

            DB::table('lecturer_summaries')->insert([
                'user_id'           => $user->id,
                'lecturer_id'       => $lecturer->id,
                'education'         => $request->input('education'),
                'research_field'    => $request->input('research_field'),
                'created_at'        => \Carbon\Carbon::now('Asia/Jakarta'),
                'updated_at'        => \Carbon\Carbon::now('Asia/Jakarta'),
            ]);

        }); 
        Session::flash('alert-success', 'Dosen berhasil ditambahkan!');
        return redirect()->route('lecturer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Lecturer $lecturer
     * @return \Illuminate\Http\Response
     */
    public function show(Lecturer $lecturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Lecturer $lecturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecturer $lecturer)
    {
        $lecturer_summary = DB::table('lecturer_summaries')->where('lecturer_id', $lecturer->id)->get();
        
        return view('admin.lecturer.edit')->with([
            'lecturer' => $lecturer,
            'lecturer_summary' => $lecturer_summary
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Lecturer $lecturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecturer $lecturer)
    {
        DB::transaction(function () use($request, $lecturer) {
            $user = auth()->user();

            if ($request->hasFile('lecturer_photo')) {
                $image = $request->file('lecturer_photo');
    
    
                $fileName = uniqid() . '_' . $image->getClientOriginalName();
                $thumbnailName = 'thumb_' . $fileName;
                
                $thumbnail = $this->fit($image, 90, 120)
                    ->save(public_path('thumbnails') . '/' . $thumbnailName);
                
                $realImage = $this->fit($image, 300, 400)
                    ->save(public_path('normal_picts') . '/' . $fileName);
                
                $lecturer->update($request->except('lecturer_photo', 'lecturer_prev_id', 'education', 'research_field'));
                $lecturer->lecturer_photo = $fileName;
            } else {
                $lecturer->update($request->except('lecturer_photo', 'lecturer_prev_id', 'education', 'research_field'));
                
            }
            
            $lecturer->save();
            DB::table('lecturer_summaries')
                ->where('lecturer_id', $request->input('lecturer_prev_id'))
                ->update([
                    'user_id'           => $user->id,
                    'lecturer_id'       => $lecturer->id,
                    'education'         => $request->input('education'),
                    'research_field'    => $request->input('research_field'),
                    'updated_at'        => \Carbon\Carbon::now('Asia/Jakarta'),
                ]);
        });
        Session::flash('alert-success', 'Berhasil mengupdate dosen!');
        return redirect()->route('lecturer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Lecturer $lecturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecturer $lecturer)
    {
        DB::transaction(function () use ($lecturer) {
            $lecturer->delete();
        });
        Session::flash('alert-success', 'Dosen berhasil dihapus!');
        return redirect()->route('lecturer.index');
    }
}
