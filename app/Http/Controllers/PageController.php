<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PageCategory;
use App\Http\Requests\UpdatePageRequest;
use App\Page;
use DB;
use Session;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_category = PageCategory::all();
        return view('admin.pages.create')->with('page_categories', $page_category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdatePageRequest $request)
    {
        $page = DB::transaction(function () use($request) {
            $page_cat = PageCategory::find($request->input('page_category'));
            $user = auth()->user();
            
            $page = $page_cat->page()->create([
              'user_id'         => $user->id,
              'title'           => $request->input('title'),
              'slug'            => str_slug($request->input('title')),
              'body'            => $request->input('body'),
              'page_status'     => $request->input('page_status') == 'Publish' ? 1 : 0,
              'published_date'  => $request->input('page_status') == 'Publish' ? \Carbon\Carbon::now('Asia/Jakarta') : NULL,
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ]);
            if ($request->input('page_status') == 'Publish')
                Session::flash('alert-success', 'Berhasil menambahkan halaman!');
            else
                Session::flash('alert-success', 'Berhasil menyimpan halaman!');
            return $page;   
        });
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  Page $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Page $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $page_cat = PageCategory::all();
        return view('admin.pages.edit')->with(['page' => $page, 'page_categories' => $page_cat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Page $page
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        
        DB::transaction(function () use ($request, $page) {
            $page->title = $request->input('title');
            $page->body = $request->input('body');
            $page->page_status = $request->input('page_status') == 'Publish' ? 1 : 0;
            $page->page_category_id = $request->input('page_category');
            $page->save();
        });
        Session::flash('alert-success', 'Berhasil mengupdate halaman!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Page $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        DB::transaction(function () use ($page) {
            $page->delete();
        });
        Session::flash('alert-success', 'Berhasil menghapus halaman!');
        return redirect('/dashboard');
    }
}
