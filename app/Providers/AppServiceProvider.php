<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\PageCategory;
use App\News;
use App\Tag;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.dashboard', function($view) {
            $abouts = PageCategory::with('page')->where('category_name', 'Tentang TI')->get();
            $student_affairs = PageCategory::with('page')->where('category_name', 'Kemahasiswaan & Lulusan')->get();
            // dd($student_affairs);
            $human_resources = PageCategory::with('page')->where('category_name', 'Sumber Daya Manusia')->get();
            $curricula = PageCategory::with('page')->where('category_name', 'Kurikulum, Pembelajaran, dan Suasana Akademik')->get();
            $facilities = PageCategory::with('page')->where('category_name', 'Prasrana, Sarana, Sistem Informasi')->get();
            $researches = PageCategory::with('page')->where('category_name', 'Penelitian, Pelayanan/Pengabdian Kepada Masyarakat, dan Kerjasama')->get();
            
            $view->with([
                'abouts'            => $abouts,
                'student_affairs'   => $student_affairs,
                'human_resources'   => $human_resources,
                'curricula'         => $curricula,
                'facilities'        => $facilities,
                'researches'        => $researches
            ]);
        });
        view()->composer('layouts.website', function($view) {
            
            $abouts = PageCategory::with('page')->where('category_name', 'Tentang TI')->get();
            $student_affairs = PageCategory::with('page')->where('category_name', 'Kemahasiswaan & Lulusan')->get();
            foreach ($student_affairs as $sa)
                $sa->category_name = "Mahasiswa & Lulusan";
            
            $human_resources = PageCategory::with('page')->where('category_name', 'Sumber Daya Manusia')->get();
            foreach ($human_resources as $hr)
                $hr->category_name = "SDM";
            
            $curricula = PageCategory::with('page')->where('category_name', 'Kurikulum, Pembelajaran, dan Suasana Akademik')->get();
            foreach ($curricula as $cr)
                $cr->category_name = "Pembelajaran";

            $facilities = PageCategory::with('page')->where('category_name', 'Prasrana, Sarana, Sistem Informasi')->get();
            foreach ($facilities as $f)    
                $f->category_name = "Sarana & Prasarana";

            $researches = PageCategory::with('page')->where('category_name', 'Penelitian, Pelayanan/Pengabdian Kepada Masyarakat, dan Kerjasama')->get();
            
            $nav_temp = array('tentang_ti', 'mahasiswa_dan_lulusan', 'sdm', 'pembelajaran', 'sarana_prasarana');
            
            $header_news = News::take(3)->get();
            if (!$header_news->isEmpty()) {
                foreach ($header_news as $hn) {
                    $words = array();
                    $words = explode(" ", $hn->title, 6);
                    if (count($words) == 6) {
                        $words[5] = "...";
                    }
                    $hn->title = implode(" ", $words);
                }
            }

            // $events = Tag::with('news')->where('tag_name', 'Event')
            //     ->take(4)
            //     ->get();
            
            // dd($events);

            $result = array();
            foreach($events as $k => $event) {
                $result["$k"] = count($event->tag);
            }

            dd($result);
            

            $view->with([
                'abouts'            => $abouts,
                'student_affairs'   => $student_affairs,
                'human_resources'   => $human_resources,
                'curricula'         => $curricula,
                'facilities'        => $facilities,
                'researches'        => $researches,
                'nav_temp'          => $nav_temp,
                'header_news'       => $header_news
            ]);
            
            
        });
        view()->composer('layouts.no_banner', function($view) {
            
            $abouts = PageCategory::with('page')->where('category_name', 'Tentang TI')->get();
            $student_affairs = PageCategory::with('page')->where('category_name', 'Kemahasiswaan & Lulusan')->get();
            foreach ($student_affairs as $sa)
                $sa->category_name = "Mahasiswa & Lulusan";
            
            $human_resources = PageCategory::with('page')->where('category_name', 'Sumber Daya Manusia')->get();
            foreach ($human_resources as $hr)
                $hr->category_name = "SDM";
            
            $curricula = PageCategory::with('page')->where('category_name', 'Kurikulum, Pembelajaran, dan Suasana Akademik')->get();
            foreach ($curricula as $cr)
                $cr->category_name = "Pembelajaran";

            $facilities = PageCategory::with('page')->where('category_name', 'Prasrana, Sarana, Sistem Informasi')->get();
            foreach ($facilities as $f)    
                $f->category_name = "Sarana & Prasarana";

            $researches = PageCategory::with('page')->where('category_name', 'Penelitian, Pelayanan/Pengabdian Kepada Masyarakat, dan Kerjasama')->get();
            
            $nav_temp = array('tentang_ti', 'mahasiswa_dan_lulusan', 'sdm', 'pembelajaran', 'sarana_prasarana');

            $view->with([
                'abouts'            => $abouts,
                'student_affairs'   => $student_affairs,
                'human_resources'   => $human_resources,
                'curricula'         => $curricula,
                'facilities'        => $facilities,
                'researches'        => $researches,
                'nav_temp'          => $nav_temp
            ]);
            
            
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
