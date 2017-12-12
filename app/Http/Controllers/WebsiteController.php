<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Page;
use App\Curriculum;
use App\Semester;
use App\Lecturer;
use App\LecturerSummary;
use App\Achievement;
use App\Service;
use App\Research;
use App\Devotion;
use App\Cooperation;
use DB;

class WebsiteController extends Controller
{
    public function home() {
        $num_word = 12;
        $news = News::where('news_status', 1)->orderBy('published_date', 'desc')->get();

        foreach ($news as $n) {
            $n->body = str_replace("<p>", "", $n->body);
            $n->body = str_replace("</p>", "", $n->body);
            $words = array();
            $words = explode(' ', $n->body, $num_word);
            
            if (count($words) == 12) {
                $words[11] = " ... ";
            }

            if (strlen($n->title) > 80) {
                $n->body = "";
            } else {
                $n->body = implode(" ", $words);
            }
            $time = strtotime($n->published_date);
            $n->published_date = date("F d, Y", $time);
        }

        return view('website.home')->with('news', $news);
    }

    public function news_detail($slug) {
        $news = News::where('slug', $slug)->get();
        foreach($news as $n) {
            $time = strtotime($n->published_date);
            $n->published_date = date("F d, Y h:i A", $time);
        }
        return view('website.news_detail')->with('news', $news);
    }

    public function detail($slug) {
        $page = Page::where('slug', $slug)->get();
        return view('website.detail')->with('page', $page);
    }

    public function curriculum() {
        $semesters = array();

        for ($i = 0; $i<8; $i++) {
            $num = $i + 1;
            $semesters[$i] = Semester::with('curricula')->where('semester_desc', 'Semester ' . $num)->get();
        }

        // dd($semesters);
        return view('website.curriculum')->with('semesters', $semesters);
    }

    public function lecturer_list() {
        $lecturer_lists = LecturerSummary::with('lecturer')->get();
        
        return view('website.lecturer_list')->with('lecturer_lists', $lecturer_lists);
    }

    public function lecturer($id) {
        $lecturer = Lecturer::find($id);
        
        return view('website.lecturer_detail')->with('lecturer', $lecturer);
    }

    public function achievement() {
        $achievements = Achievement::all();
        return view('website.achievement')->with('achievements', $achievements);
    }

    public function service() {
        return view('website.service')->with('services', Service::all());
    }

    public function research() {
        return view('website.research')->with('researches', Research::all());
    }

    public function devotion() {
        return view('website.devotion')->with('devotions', Devotion::all());
    }

    public function cooperation() {
        return view('website.cooperation')->with('cooperations', Cooperation::all());
    }

    public function search(Request $request) {
        $keyword = $request->input('key');
        $results = News::where('title', 'like', '%' . $keyword . '%')
            ->orWhere('body', 'like', '%' . $keyword . '%')->get();
                
        if (!$results->isEmpty()){
            $num_word = 50;
            foreach ($results as $result) {
                $result->body = str_replace("<p>", "", $result->body);
                $result->body = str_replace("</p>", "", $result->body);
                $words = array();
                $words = explode(' ', $result->body, $num_word);
                
                if (count($words) == 50) {
                    $words[49] = " ... ";
                }

                $result->body = implode(" ", $words);
                $error = '';
                
            }
        } else {
            $error = 'Tidak ditemukan hasil dengan kata kunci <strong>' . $keyword . '</strong>';
        }
        
        
        return view('website.search_result')->with([
            'keyword' => $keyword,
            'results' => $results,
            'error' => $error
        ]);
    }
}
