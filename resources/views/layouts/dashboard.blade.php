<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Admin Web TI')}}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('vendor/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .my-error-message {
            color: #af310a;
        }
    </style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/dashboard">{{ config('app.name', 'Admin Web TI') }}</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--<li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li>-->
                            <!-- /input-group -->
                        
                        <li>
                            <a href="/dashboard"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> Berita<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href=" {{ route('news.index') }} ">Lihat Semua</a>
                                </li>
                                <li>
                                    <a href=" {{ route('news.create') }} ">Buat Berita Baru</a>
                                </li>
                            </ul>
                        </li>
                        @foreach($abouts as $abouts)
                        <li>
                            <a href="#"><i class="fa fa-info-circle  fa-fw"></i> {{ $abouts->category_name }}<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                @foreach($abouts->page as $pg)
                                @if ($pg->page_status == 1)
                                <li>
                                    <a href="{{ route('page.edit', $pg->id) }}">{{ $pg->title }}</a>
                                </li>
                                @endif
                                @endforeach
                                <li>
                                    <a href=" {{ route('page.create') }} ">Buat Halaman Baru</a>
                                </li>
                            </ul>
                        </li>
                        @endforeach
                        @foreach($student_affairs as $students_affair)
                        <li>
                            <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> {{ $students_affair->category_name }}<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                @foreach($students_affair->page as $pg)
                                @if ($pg->page_status == 1)
                                <li>
                                    <a href="{{ route('page.edit', $pg->id) }}">{{ $pg->title }}</a>
                                </li>
                                @endif
                                @endforeach
                                <li>
                                    <a href=" {{ route('achievement.index') }} ">Prestasi</a>
                                </li>
                                <li>
                                    <a href=" {{ route('service.index') }} ">Layanan</a>
                                </li>
                                <li>
                                    <a href=" {{ route('page.create') }} ">Buat Halaman Baru</a>
                                </li>
                            </ul>
                        </li>
                        @endforeach
                        @foreach($human_resources as $human_resource)
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> {{ $human_resource->category_name }}<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                @foreach($human_resource->page as $pg)
                                @if ($pg->page_status == 1)
                                <li>
                                    <a href="{{ route('page.edit', $pg->id) }}">{{ $pg->title }}</a>
                                </li>
                                @endif
                                @endforeach
                                <li>
                                    <a href=" {{ route('lecturer.index') }} ">Dosen</a>
                                </li>
                                <li>
                                    <a href=" {{ route('page.create') }} ">Buat Halaman Baru</a>
                                </li>
                            </ul>
                        </li>
                        @endforeach
                        @foreach($curricula as $curriculum)
                        <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> {{ $curriculum->category_name }}<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                @foreach($curriculum->page as $pg)
                                @if ($pg->page_status == 1)
                                <li>
                                    <a href="{{ route('page.edit', $pg->id) }}">{{ $pg->title }}</a>
                                </li>
                                @endif
                                @endforeach
                                <li>
                                    <a href=" {{ route('curriculum.index') }} ">Kurikulum</a>
                                </li>
                                <li>
                                    <a href=" {{ route('page.create') }} ">Buat Halaman Baru</a>
                                </li>
                            </ul>
                        </li>
                        @endforeach
                        @foreach($facilities as $facility)
                        <li>
                            <a href="#"><i class="fa fa-university fa-fw"></i> {{ $facility->category_name }}<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                @foreach($facility->page as $pg)
                                @if ($pg->page_status == 1)
                                <li>
                                    <a href="{{ route('page.edit', $pg->id) }}">{{ $pg->title }}</a>
                                </li>
                                @endif
                                @endforeach
                                <li>
                                    <a href=" {{ route('page.create') }} ">Buat Halaman Baru</a>
                                </li>
                            </ul>
                        </li>
                        @endforeach
                        @foreach($researches as $researches)
                        <li>
                            <a href="#"><i class="fa fa-search fa-fw"></i> {{ $researches->category_name }}<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                @foreach($researches->page as $pg)
                                @if ($pg->page_status == 1)
                                <li>
                                    <a href="{{ route('page.edit', $pg->id) }}">{{ $pg->title }}</a>
                                </li>
                                @endif
                                @endforeach
                                <li>
                                    <a href=" {{ route('research.index') }} ">Penelitian</a>
                                </li>
                                <li>
                                    <a href=" {{ route('devotion.index') }} ">Pengabdian kepada Masyarakat</a>
                                </li>
                                <li>
                                    <a href=" {{ route('coop.index') }} ">Kerjasama</a>
                                </li>
                                <li>
                                    <a href=" {{ route('page.create') }} ">Buat Halaman Baru</a>
                                </li>
                            </ul>
                        </li>
                        @endforeach
                        
                        
                        
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">

            @yield('content')
        
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('vendor/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('data/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>
    {{--  <script src="{{ asset('js/app.js') }}"></script>  --}}
</body>

</html>
