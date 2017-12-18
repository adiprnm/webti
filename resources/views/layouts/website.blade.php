<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Website TI Unpad  - @yield('page_title')</title>
		<!-- bootsrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<link href="{{ asset('template') . '/css/responsive-slider.css' }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('template') . '/css/animate.css' }}">
		<link rel="stylesheet" href="{{ asset('template') . '/css/font-awesome.min.css' }}">
		<link rel="stylesheet" href="{{ asset('template') . '/css/lib/fontello.css' }}" />
		<link rel="stylesheet" href="{{ asset('template') . '/css/lib/normalize.css' }}" />
		<link rel="stylesheet" href="{{ asset('template') . '/css/sidebar.css' }}" />
		<link rel="stylesheet" href="{{ asset('template') . '/css/index.css' }}" />
		<link href="{{ asset('template') . '/css/style.css' }}" rel="stylesheet">
		<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
		<div class="wrapper jsc-sidebar-content jsc-sidebar-pulled container">
			<nav class="on">
				<a href="#" class="link-menu jsc-sidebar-trigger"><i id="hamburger" class="material-icons">menu</i></a>
			</nav>
			<header class="headerbig">
				<div class="container">
					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet">
							<a href="/">
								<img style="margin-left: -30px;" class="logo" src="{{ asset('template') . '/img/logo.png' }}" width="250px">
							</a>
						</div>
						<div class="mdl-cell mdl-cell--7-col mdl-cell--2-col-tablet"></div>
						<div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet">
							<div class="mdl-grid" style="float: right;">
								<ul class="nav nav-tabs" role="tablist">
									<li>
										<div class="btn-group download" style="margin-top: -40px">
											<button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-toggle="dropdown">
											Download &nbsp;
											<span class="caret">
											</span>
											</button>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li>
													<a href="http://www.unpad.ac.id/wp-content/uploads/2012/10/PR-N0-22-TAHUN-2016-KALENDAR-KEGIATAN-AKADEMIK.pdf">Kalender Akademik 2016-2017
													</a>
												</li>
												<li>
													<a href="https://drive.google.com/a/unpad.ac.id/file/d/0Bx4uEsniwF4KUWlZTGVPX3RlTUE/view?usp=sharing">RIR Unpad 2016-2020
													</a>
												</li>
												<li>
													<a href="https://drive.google.com/a/unpad.ac.id/file/d/0Bx4uEsniwF4KT2xzWUw1Ry1Ec3c/view?usp=sharing">Pedoman Riset Unpad 2017
													</a>
												</li>
												<li>
													<a href="https://drive.google.com/a/unpad.ac.id/file/d/0Bx4uEsniwF4KbjYtalc1Q0Q0alk/view?usp=sharing">Video Riset Unpad 2017
													</a>
												</li>
												<li>
													<a href="http://informatika.unpad.ac.id/file/ProceedingICMCS2013.pdf">Proceeding ICMCS 2013
													</a>
												</li>
												<li>
													<a href="http://www.fmipa.unpad.ac.id/fix/wp-content/document_academic/1-Pengelolaan-Pendidikan-Unpad.pdf">Pengelolaan Pendidikan UNPAD
													</a>
												</li>
												<li>
													<a href="http://www.fmipa.unpad.ac.id/fix/wp-content/document_academic/2-Penyelenggaraan-Pendidikan-FMIPA-Unpad.pdf">Penyelenggaraan Pendidikan di FMIPA UNPAD
													</a>
												</li>
												<li>
													<a href="http://www.fmipa.unpad.ac.id/fix/wp-content/document_academic/3-Penulisan-Skripsi-Unpad.pdf">Pedoman Penulisan Skripsi</a>
												</li>
												<li>
													<a href="http://akademik.fmipa.unpad.ac.id/direktori_peraturan/">Direktori Peraturan FMIPA UNPAD</a>
												</li>
												<li>
													<a href="http://www.unpad.ac.id/arsip-unpad/">Direktori Arsip UNPAD
													</a>
												</li>
												<li>
													<a href="https://drive.google.com/open?id=0B6slv9PMS6LEWlphOGNGNm9LOUE">SAPTO 101
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<div class="btn-group link">
											<button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-toggle="dropdown">
											Link &nbsp;
											<span class="caret"></span>
											</button>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li>
													<a href="siat.unpad.ac.id">Sistem Informasi Akademik Terpadu (SIAT)
													</a>
												</li>
												<li>
													<a href="http://informatika.unpad.ac.id/dreamspark/">Microsoft Imagine Unpad
													</a>
												</li>
												<li>
													<a href="http://cdc.unpad.ac.id/">Lowongan Kerja dan Karir
													</a>
												</li>
												<li>
													<a href="http://kandaga.unpad.ac.id/">Unpad Repositories
													</a>
												</li>
												<li>
													<a href="http://staffs.unpad.ac.id/">Sistem Informasi Staff
													</a>
												</li>
												<li>
													<a href="http://blogs.unpad.ac.id/informatika">BLOGS Informatika
													</a>
												</li>
												<li>
													<a href="http://amadi.unpad.ac.id/">AMADI Research
													</a>
												</li>
												<li>
													<a href="http://pak.dikti.go.id/portal/">Sistem Penilaian Angka Kredit Dosen
													</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
							<!-- <div class="mdl-grid" style="margin-top: 20px;">
								<form method="GET" action="/search" >
									<div class="input-group carix">
										<input type="text" class="form-control" placeholder="Search" name="key" id="searchbig">
										<div class="input-group-btn">
											<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
										</div>
									</div>
								</form>
							</div> -->
						</div>
					</div>
					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--9-col mdl-cell--8-col-tablet"></div>
						<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet" style="margin-top: -50px; margin-left: 0px;">
							<form method="GET" action="/search" >
								<div class="input-group carix">
									<input type="text" class="form-control" placeholder="Search" name="key" id="searchbig">
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit">
											<i class="glyphicon glyphicon-search">
											</i>
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet" style="margin-top: -5px">
							<div class="mdl-grid" style="margin-left: -20px;">
								<ul class="nav nav-tabs menubig">
									<li><a href="/">Home</a></li>
									<?php $i = 0; ?>
									@foreach($abouts as $about)
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">{!! $about->category_name !!}<span class="caret"></span></a>
										<ul class="dropdown-menu">
											@foreach($about->page->all() as $page)
											<li><a href="/{{ $nav_temp[$i] }}/{{ $page->slug }}">{!! $page->title !!}</a></li>
											@endforeach
										</ul>
									</li>
									<?php $i++ ?>
									@endforeach
									@foreach($student_affairs as $sa)
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">{!! $sa->category_name !!}<span class="caret"></span></a>
										<ul class="dropdown-menu">
											@foreach($sa->page->all() as $page)
											<li><a href="/{{ $nav_temp[$i] }}/{{ $page->slug }}">{!! $page->title !!}</a></li>
											@endforeach
											<li><a href="/{{ $nav_temp[$i] }}/prestasi">Prestasi</a></li>
											<li><a href="/{{ $nav_temp[$i] }}/layanan">Layanan</a></li>
										</ul>
									</li>
									<?php $i++ ?>
									@endforeach
									@foreach($human_resources as $hr)
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">{!! $hr->category_name !!}<span class="caret"></span></a>
										<ul class="dropdown-menu">
											@foreach($hr->page->all() as $page)
											<li><a href="/{{ $nav_temp[$i] }}/{{ $page->slug }}">{!! $page->title !!}</a></li>
											@endforeach
											<li><a href="/{{ $nav_temp[$i] }}/dosen">Dosen</a></li>
										</ul>
									</li>
									<?php $i++ ?>
									@endforeach
									@foreach($curricula as $curriculum)
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">{!! $curriculum->category_name !!}<span class="caret"></span></a>
										<ul class="dropdown-menu">
											@foreach($curriculum->page->all() as $page)
											<li><a href="/{{ $nav_temp[$i] }}/{{ $page->slug }}">{!! $page->title !!}</a></li>
											@endforeach
											<li><a href="/{{ $nav_temp[$i] }}/kurikulum">Kurikulum</a></li>
										</ul>
									</li>
									<?php $i++ ?>
									@endforeach
									@foreach($facilities as $facility)
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">{!! $facility->category_name !!}<span class="caret"></span></a>
										<ul class="dropdown-menu">
											@foreach($facility->page->all() as $page)
											<li><a href="/{{ $nav_temp[$i] }}/{{ $page->slug }}">{!! $page->title !!}</a></li>
											@endforeach
										</ul>
									</li>
									<?php $i++ ?>
									@endforeach
								</ul>
							</div>
							<svg class="line" height="100" width="1375" style="margin-left: 2px;" text-allign=10px;>
								<line x1="0" y1="0" x2="80%" y2="0" style="stroke:rgb(255,132,0);stroke-width:3" />
							</svg>
						</div>
					</div>
				</div>
			</header>
			<main class="main_1200">
				<div class="slider">
					<div class="container show">
						<div class="mdl-grid slidery">
							<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">
								<div class="row">
									<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
										<div class="slides" data-group="slides">
											<ul>
												@foreach($header_news as $key => $hn)
												<li>
													<div class="slide-body" data-group="slide">
														<img src="{{ asset('template') . '/img/' . $key . '_copy.jpg' }}" alt="">
															<div class="caption header" data-animate="slideAppearUpToDown" data-delay="500" data-length="300">
																<a href="/news_detail/{{ $hn->slug }}" style="color: white;">
																	<button class="btn btn-primary">
																		<h4>{{ $hn->title }}</h4>
																	</button>
																</a>
																<a href="/news_detail/{{ $hn->slug }}" style="color: white;">
																	<div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="1200" data-length="300">
																		<button class="btn btn-primary">
																		<h6>
																		<span>Baca selengkapnya</span>
																		</h6>
																		</button>
																	</div>
																</a>
															</div>
													</div>
												</li>
													@endforeach
											</ul>
										</div>
											<a class="slider-control left" href="#" data-jump="prev">
												<i class="fa fa-angle-left fa-2x"></i>
											</a>
											<a class="slider-control right" href="#" data-jump="next">
												<i class="fa fa-angle-right fa-2x"></i>
											</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
					<!-- content -->
				<div class="container" stlyle="padding-left: 15px;">
					<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--9-col mdl-cell--9-col-tablet mdl-cell--12-col-phone" >
							<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
								@yield('title')
								<svg class="linecontent" height="100" width="111%" text-allign=10px;>
									<line x1="0" y1="0" x2="80%" y2="0" style="stroke:rgb(255,132,0);stroke-width:3" />
								</svg>
								<svg class="linecontentlow" height="100" width="127%" text-allign=10px;>
										<line x1="0" y1="0" x2="80%" y2="0" style="stroke:rgb(255,132,0);stroke-width:3" />
								</svg>
							</div>
							<div class="mdl-grid content-top">
								@yield('content')
							</div>
							<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">
								@yield('pagination')
							</div>
						</div>
						<div class="mdl-cell mdl-cell--3-col mdl-cell--3-col-tablet mdl-cell--12-col-phone" >
							<div class="mdl-cell mdl-cell--12-col mdl-cell--3-col-tablet activity">
								<h3>Activity</h3>
									<svg class="linecontent" height="100" width="111%" text-allign=10px;>
										<line x1="0" y1="0" x2="80%" y2="0" style="stroke:rgb(255,132,0);stroke-width:3" />
									</svg>
									<svg class="linecontentlow" height="100" width="127%" text-allign=10px;>
										<line x1="0" y1="0" x2="80%" y2="0" style="stroke:rgb(255,132,0);stroke-width:3" />
									</svg>
									<div class="btn-group-vertical btnactivity">
										<button class="btn btn-info btn-sm" id="pad" onclick="window.location.href='/penelitian'">
											<a style="color: white;">Penelitian</a>
										</button>
										<button class="btn btn-info btn-sm" id="pad" onclick="window.location.href='/pengabdian'">
											<a style="color: white;">Pengabdian</a>
										</button>
										<button class="btn btn-info btn-sm" id="pad" onclick="window.location.href='/kerjasama'">
											<a style="color: white;">Kerja Sama</a>
										</button>
									</div>
							</div>
							<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet"></div>
							<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet" id="event2">
								<h3>Event</h3>
								<svg class="linecontent" height="100" width="111%" text-allign=10px;>
									<line x1="0" y1="0" x2="80%" y2="0" style="stroke:rgb(255,132,0);stroke-width:3" />
								</svg>
								<svg class="linecontentlow" height="100" width="127%" text-allign=10px;>
									<line x1="0" y1="0" x2="80%" y2="0" style="stroke:rgb(255,132,0);stroke-width:3" />
								</svg>
								<div class="card w-50">
									<div class="card-block">
									{{--  <hr>  --}}
									<div>&nbsp;</div>
									@foreach($events as $event)
									{{--  <h5 class="card-title">2017</h5>  --}}
									<div class="event-content">
										<span class="badge">{{ $event->event_date }}</span>
										<p class="card-text"><strong>{{ $event->event_title }}</strong> di {{ $event->event_location }}</p>
										<a href="{{ '/event_ti/' . $event->event_slug }}" class="btn btn-primary">View</a>
									</div>
									<div>&nbsp;</div>
									@endforeach
									{{--  <h5 class="card-title">2017</h5>
									<span class="badge">
										<p class="card-text">Seminar International</p>
											<a href="#" class="btn btn-primary">Join</a>  --}}
									</span>
									</div>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet event">
							<h3>Himpunan</h3>
								<svg class="linecontent" height="100" width="111%" text-allign=10px;>
									<line x1="0" y1="0" x2="80%" y2="0" style="stroke:rgb(255,132,0);stroke-width:3" />
								</svg>
								<svg class="linecontentlow" height="100" width="127%" text-allign=10px;>
									<line x1="0" y1="0" x2="80%" y2="0" style="stroke:rgb(255,132,0);stroke-width:3" />
								</svg>
									<a href="http://himatif.fmipa.unpad.ac.id/">
										<img src="{{ asset('template') . '/img/himatif.png' }}" height="100px" class="himatif">
									</a>
							</div>
						</div>
					</div>
				</div>
			</main>
			<footer>
				<div class="container">
					<div class="mdl-cell mdl-cell--12-col mdl-cell--6-col-tablet footerfix" id="eventfooter">
						<h3>Event</h3>
						<svg class="linecontent" height="100" width="111%" text-allign=10px;>
							<line x1="0" y1="0" x2="80%" y2="0" style="stroke:rgb(255,132,0);stroke-width:3" />
						</svg>
						<svg class="linecontentlow" height="100" width="127%" text-allign=10px;>
							<line x1="0" y1="0" x2="80%" y2="0" style="stroke:rgb(255,132,0);stroke-width:3" />
						</svg>
						<div class="card w-50">
							<div class="card-block">
							{{--  <hr>  --}}
							<div>&nbsp;</div>
							@foreach($events as $event)
							{{--  <h5 class="card-title">2017</h5>  --}}
							<div class="event-content">
								<span class="badge">{{ $event->event_date }}</span>
								<p class="card-text"><strong>{{ $event->event_title }}</strong> di {{ $event->event_location }}</p>
								<a href="{{ '/event_ti/' . $event->event_slug }}" class="btn btn-primary">View</a>
							</div>
							<div>&nbsp;</div>
							@endforeach
							{{--  <h5 class="card-title">2017</h5>
							<span class="badge">
								<p class="card-text">Seminar International</p>
									<a href="#" class="btn btn-primary">Join</a>  --}}
							</span>
							</div>
						</div>
					</div>
					<div class="mdl-grid" style="margin: 0">
						<div class="mdl-cell mdl-cell--12-col mdl-cell--3col-tablet">
							<svg class="linecontentfooter" height="10" width="125%" text-allign=10px; style>
								<line x1="0" y1="0" x2="80%" y2="0" style="stroke:rgb(255,132,0);stroke-width:3" />
							</svg>
						</div>
					</div>
					<div class="mdl-grid" style="margin-top: -10px;">
					<div class="mdl-cell mdl-cell--6-col mdl-cell--3col-tablet footerfix">
						<h5 class="widgetheading">Contact Me</h5>
						<p>
							<span class="glyphicon glyphicon-earphone"></span>&nbsp;+6222-7798983
							<br>
							<span class="glyphicon glyphicon-phone-alt"></span>&nbsp;+6222-7794545
							<br>
							<span class="glyphicon glyphicon-envelope"></span>&nbsp;+62811234734
							<br>
							<span class="glyphicon glyphicon-home"></span>&nbsp;Informatika@unpad.ac.id
						</p>
					</div>
					<div class="mdl-cell mdl-cell--6-col mdl-cell--3col-tablet footerfix">
						<h5 class="widgetheading">Location</h5>
							<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					</div>
				</div>
			</footer>
		</div>
		<nav class="sidebar jsc-sidebar on" id="jsi-nav" data-sidebar-options="">
			<ul class="sidebar-list">
				<li class="dropdown"><a class="dropdown-toggle mdl-navigation__link" href="/">Home</a></li>
				<?php $i = 0; ?>
				@foreach($abouts as $about)
				<li class="dropdown">
					<a class="dropdown-toggle mdl-navigation__link" data-toggle="dropdown" href="#">{!! $about->category_name !!}<span class="caret"></span></a>
					<ul class="dropdown-menu">
					@foreach($about->page->all() as $page)
						<li><a href="/{{ $nav_temp[$i] }}/{{ $page->slug }}">{!! $page->title !!}</a></li>
						@endforeach
					</ul>
				</li>
				<?php $i++ ?>
				@endforeach
				@foreach($student_affairs as $sa)
				<li class="dropdown">
					<a class="dropdown-toggle mdl-navigation__link" data-toggle="dropdown" href="#">{!! $sa->category_name !!}<span class="caret"></span></a>
					<ul class="dropdown-menu">
						@foreach($sa->page->all() as $page)
						<li>
							<a href="/{{ $nav_temp[$i] }}/{{ $page->slug }}">{!! $page->title !!}</a></li>
							@endforeach
						<li>
							<a href="/{{ $nav_temp[$i] }}/prestasi">Prestasi</a></li>
						<li>
							<a href="/{{ $nav_temp[$i] }}/layanan">Layanan</a></li>
					</ul>
				</li>
				<?php $i++ ?>
				@endforeach
				@foreach($human_resources as $hr)
				<li class="dropdown">
					<a class="dropdown-toggle mdl-navigation__link" data-toggle="dropdown" href="#">{!! $hr->category_name !!}<span class="caret"></span></a>
					<ul class="dropdown-menu">
						@foreach($hr->page->all() as $page)
						<li><a href="/{{ $nav_temp[$i] }}/{{ $page->slug }}">{!! $page->title !!}</a></li>
						@endforeach
						<li><a href="/{{ $nav_temp[$i] }}/dosen">Dosen</a></li>
					</ul>
				</li>
				<?php $i++ ?>
				@endforeach
				@foreach($curricula as $curriculum)
				<li class="dropdown">
					<a class="dropdown-toggle mdl-navigation__link" data-toggle="dropdown" href="#">{!! $curriculum->category_name !!}<span class="caret"></span></a>
					<ul class="dropdown-menu">
					@foreach($curriculum->page->all() as $page)
						<li>
							<a href="/{{ $nav_temp[$i] }}/{{ $page->slug }}">{!! $page->title !!}</a>
						</li>
						@endforeach
						<li>
							<a href="/{{ $nav_temp[$i] }}/kurikulum">Kurikulum</a>
						</li>
					</ul>
				</li>
				<?php $i++ ?>
				@endforeach
				@foreach($facilities as $facility)
				<li class="dropdown">
					<a class="dropdown-toggle mdl-navigation__link" data-toggle="dropdown" href="#">{!! $facility->category_name !!}<span class="caret"></span></a>
						<ul class="dropdown-menu">
						@foreach($facility->page->all() as $page)
							<li>
								<a href="/{{ $nav_temp[$i] }}/{{ $page->slug }}">{!! $page->title !!}</a>
							</li>
							@endforeach
						</ul>
				</li>
				<?php $i++ ?>
				@endforeach
			</ul>
		</nav>
	</body>
	<script src="{{ asset('template') . '/js/responsive-slider.js' }}"></script>
	<script src="{{ asset('template') . '/js/wow.min.js' }}"></script>
	<script src="{{ asset('template') . '/js/lib/jquery.min.js' }}"></script>
	<script src="{{ asset('template') . '/js/sidebar.js' }}"></script>
	<script>
		$('#jsi-nav').sidebar({
			trigger: '.jsc-sidebar-trigger',
			pullCb: function () { console.log('pull'); },
			pushCb: function () { console.log('push'); }
		});
	</script>
</html>