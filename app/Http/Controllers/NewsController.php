<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\UpdateNewsRequest;
use App\News;
use App\Tag;
use App\Category;
use Image;
use Session;
use DB;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $published = News::where('news_status', 1)->get();
        $drafted = News::where('news_status', 0)->get();
        return view('admin.news.index')->with(['published' => $published, 'drafted' => $drafted]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.news.create')->with(['tags' => $tags, 'categories' => $categories]);
    }

    private function fit($image, $width, $height)
    {
        return Image::make($image->getRealPath())
            ->fit($width, $height);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateNewsRequest $request)
    {
        $news = DB::transaction(function() use ($request) {
            $slug = str_slug($request->title);
            $categories = $request->categories;
            $tags = $request->tags;
            $user = auth()->user();
            
            if ($request->hasFile('cover_url')) {
                $cover = $request->file('cover_url');
                $coverName = uniqid() . '_' . $cover->getClientOriginalName();

                $this->fit($cover, 200, 200)
                    ->save(public_path('cover_url') . '/' . $coverName);
                
                $news = new News($request->except('cover_url'));
                $news->cover_url = $coverName;
            } else {
                $news = new News($request->all());
            }

            if ($request->input('news_status') == 'Publish') {
                $news->news_status = 1;
                $news->published_date = \Carbon\Carbon::now('Asia/Jakarta');
            } else {
                $news->news_status = 0;
            }
            
            $news->slug = $slug;
            $user->news()->save($news);
            $news->save();

            if (!empty($categories)){
                foreach ($categories as $category ) {
                    $cat = Category::find($category);
                    $news->category()->save($cat);
                }
            }
            
            if (!empty($tags)){
                foreach ($tags as $tag ) {
                    $mytag = Tag::find($tag);
                    $news->tag()->save($mytag);
                }
            }
            $news->save();
            return $news;
        });
        Session::flash('alert-success', 'Berhasil menambahkan berita baru!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  News $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.news.edit')->with([
            'news' => $news,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  News $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        DB::transaction(function () use ($request, $news) {
            $cat_id = $request->input('categories');
            $tag_id = $request->input('tags');
            
            if ($request->hasFile('cover_url')) {
                $cover = $request->file('cover_url');
                $coverName = uniqid() . '_' . $cover->getClientOriginalName();

                $this->fit($cover, 200, 200)
                    ->save(public_path('cover_url') . '/' . $coverName);
                
                $news->cover_url = $coverName;
            }
            
            if ($request->input('news_status') == 'Publish') {
                $status = 1;
                $news->published_date = \Carbon\Carbon::now('Asia/Jakarta');
            } else {
                $status = 0;
            }

            $news->update($request->except(['categories', 'tags', 'news_status', 'cover_url']));
            
            $news->category()->sync($cat_id);
            $news->tag()->sync($tag_id);
            $news->news_status = $status;
            $news->save();
        });
        
        Session::flash('alert-success', 'Berhasil mengupdate berita!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  News $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        DB::transaction(function() use($news) {
            $news->category()->detach();
            $news->tag()->detach();
            $news->delete();
        });
        Session::flash('alert-success', 'Berhasil menghapus berita!');
        return redirect()->back();
    }
}
