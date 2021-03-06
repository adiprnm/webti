<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website TI Unpad - @yield('page_title')</title>
	<!-- bootsrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<link href="{{ asset('template') . '/css/responsive-slider.css' }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('template') . '/css/animate.css' }}">
	<link rel="stylesheet" href="{{ asset('template') . '/css/font-awesome.min.css' }}">
	<link href="{{ asset('template') . '/css/style.css' }}" rel="stylesheet">	
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
</head>
<body>
	<header class="headerbig">
		<div class="container">
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet"><a href="/"><img class="logo" src="{{ asset('template') . '/img/logo.png' }}" width="250px"></a></div>
				<div class="mdl-cell mdl-cell--8-col mdl-cell--2-col-tablet"></div>
				<div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet">
					<div class="menu">
						<ul class="nav nav-tabs" role="tablist">
							<li>
								<div class="btn-group download">
									<button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-toggle="dropdown">
									Download &nbsp;<span class="caret"></span></button>
									  <ul class="dropdown-menu" role="menu">
									    <li><a href="#">Tablet</a></li>
									    <li><a href="#">Smartphone</a></li>
									  </ul>
								</div>
							</li>
							<li>
								<div class="btn-group link">
									<button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-toggle="dropdown">
									Link &nbsp;<span class="caret"></span></button>
									  <ul class="dropdown-menu" role="menu">
									    <li><a href="#">Tablet</a></li>
									    <li><a href="#">Smartphone</a></li>
									    </ul>
								</div>
							</li>					
						</ul>
					</div>
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--11-col mdl-cell--8-col-tablet">
					<div class="mdl-grid">
						<ul class="nav nav-tabs menubig">
						    <li class="active"><a href="/">Home</a></li>
						    <li class="dropdown">
						      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tentang TI<span class="caret"></span></a>
						      <ul class="dropdown-menu">
						        <li><a href="/tentang_ti/visi-misi-tujuan-dan-sasaran">Visi, Misi, Tujuan, Sasaran dan Strategi Pencapaian</a></li>
						        <li><a href="/tentang_ti/organisasi-dan-tata-pamong">Organisasi dan Tata Pamong</a></li>						                             
						      </ul>
						    </li>
						    <li class="dropdown">
						      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mahasiswa & Lulusan<span class="caret"></span></a>
						      <ul class="dropdown-menu"> 
						        <li><a href="/mahasiswa_dan_lulusan/mahasiswa-dan-lulusan">Mahasiswa Lulusan</a></li>                        
						      </ul>
						    </li>
						    <li class="dropdown">
						      <a class="dropdown-toggle" data-toggle="dropdown" href="#">SDM<span class="caret"></span></a>
						      <ul class="dropdown-menu">
						        <li><a href="/dosen">Dosen</a></li>                        
						      </ul>
						    </li>
						    <li class="dropdown">
						      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pembelajaran<span class="caret"></span></a>
						      <ul class="dropdown-menu">
						        <li><a href="/kurikulum">Kurikulum</a></li>                        
						      </ul>
						    </li>
						    <li class="dropdown">
						      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sarana & Prasarana<span class="caret"></span></a>
						      <ul class="dropdown-menu">
						        <li><a href="#">Submenu 1-1</a></li>
						        <li><a href="#">Submenu 1-2</a></li>
						        <li><a href="#">Submenu 1-3</a></li>                        
						      </ul>
						    </li>
						 </ul>
					</div>
					<svg class="line" height="100" width="1050" text-allign=10px;>
		            	<line x1="0" y1="0" x2="80%" y2="0" style="stroke:rgb(255,132,0);stroke-width:3" />
		        	</svg>
				</div>
			</div>
				<div class="mdl-cell mdl-cell--1-col mdl-cell--4-col-tablet">
				</div>
			<div class="mdl-grid search">
				<div class="mdl-cell mdl-cell--9-col mdl-cell--4-col-tablet"></div>
				<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
					<form action="/action_page.php">
    				<div class="input-group carix">
				      <input type="text" class="form-control" placeholder="Search" name="search" width="75%">
				      <div class="input-group-btn">
				        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				      </div>
				    </div>
				  </form>
				</div>
			</div>
		</div>
	</header>
		<div class="mdl-grid">
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header headermiddle">
		  <header class="mdl-layout__header">
		    <div class="mdl-layout__header-row">
		      <!-- Title -->
		      <span class="mdl-layout-title">Title</span>
		      <!-- Add spacer, to align navigation to the right -->
		      <div class="mdl-layout-spacer"></div>
		      <!-- Navigation. We hide it in small screens. -->
		      <nav class="mdl-navigation mdl-layout--large-screen-only">
		        <a class="mdl-navigation__link" id="active" href="/">Home</a>
		        <a class="mdl-navigation__link" id="link" href="">Tentang TI</a>
		        <a class="mdl-navigation__link" id="link" href="">Mahasiswa</a>
		        <a class="mdl-navigation__link" id="link" href="">SDM</a>
		        <a class="mdl-navigation__link" id="link" href="">Pembelajaran</a>
		        <a class="mdl-navigation__link" id="link" href="">Sarana</a>
		      </nav>
		      <!-- start search form -->
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
			    <label class="mdl-button mdl-js-button mdl-button--icon" for="search-expandable">
			      <i class="material-icons">search</i>
			    </label>
			    <div class="mdl-textfield__expandable-holder">
			      <input class="mdl-textfield__input" type="text" id="search-expandable" />
			      <label class="mdl-textfield__label" for="search-expandable">Search text</label>
			    </div>
  			</div>
  			<!-- end search form -->
		    </div>
		  </header>
		  <div class="mdl-layout__drawer">
		    <span class="mdl-layout-title">Title</span>
		    <nav class="mdl-navigation">
		      <a class="mdl-navigation__link" href="">Link</a>
		      <a class="mdl-navigation__link" href="">Link</a>
		      <a class="mdl-navigation__link" href="">Link</a>
		      <a class="mdl-navigation__link" href="">Link</a>
		    </nav>
		  </div>
		</div>
	</div>
	<main>
		<div class="slider">
			<div class="container show">
				<div class="mdl-grid slidery">
					<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">
						<div class="row">
							<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
								<div class="slides" data-group="slides">
									<ul>
										<li>
											<div class="slide-body" data-group="slide">
												<img src="{{ asset('template') . '/img/2a.jpg' }}" alt="">
												<div class="caption header" data-animate="slideAppearUpToDown" data-delay="500" data-length="300">
													<button class="btn btn-primary"><h2> we are creative design</h2></button>
													<div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="1200" data-length="300"><button class="btn btn-primary"><h4><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit sit amet.</span></h4></button></div>
												</div>
											</div>
										</li>
									<li>
										<div class="slide-body" data-group="slide">
											<img src="{{ asset('template') . '/img/1.jpg' }}" alt="">
											<div class="caption header" data-animate="slideAppearDownToUp" data-delay="500" data-length="300">
												<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off"><h2>creative design Responsive slider</h2></button>
												<div class="caption-sub" data-animate="slideAppearUpToDown" data-delay="800" data-length="300"><button class="btn btn-primary"><h4><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit sit amet. </span></h4></button></div>
											</div>
										</div>
									</li>
									<li>
										<div class="slide-body" data-group="slide">
											<img src="{{ asset('template') . '/img/10.jpg' }}" alt="">
											<div class="caption header" data-animate="slideAppearUpToDown" data-delay="500" data-length="300">
											  <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off"><h2>creative design Custom animations</h2></button>
											  <div class="caption-sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"><button class="btn btn-primary"><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit sit amet.</h4></button></div>
											</div>
										</div>
									</li>
								</ul>
							</div>
								<a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
								<a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>		
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- content -->
		<div class="container">
			
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
				        	<button class="btn btn-info btn-sm" id="pad">Pendidikan</button>
				        	<button class="btn btn-info btn-sm" id="pad">Pendidikan</button>
				        	<button class="btn btn-info btn-sm" id="pad">Pendidikan</button>
			        	</div>
					</div>
					<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet"></div>
					<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">
						<h3>Event</h3>
						<svg class="linecontent" height="100" width="111%" text-allign=10px;>
			            	<line x1="0" y1="0" x2="80%" y2="0" style="stroke:rgb(255,132,0);stroke-width:3" />
			        	</svg>
			        	<svg class="linecontentlow" height="100" width="127%" text-allign=10px;>
			            	<line x1="0" y1="0" x2="80%" y2="0" style="stroke:rgb(255,132,0);stroke-width:3" />
			        	</svg>
			        	<div class="card w-50">
						  <div class="card-block">
						    <h5 class="card-title">2017</h5>
						    <p class="card-text">Seminar International</p>
						    <a href="#" class="btn btn-primary">Join</a>
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
				 		<img src="{{ asset('template') . '/img/himatif.png' }}" height="100px" class="himatif">
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<div class="container">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col mdl-cell--3col-tablet">
				<svg class="linecontentfooter" height="100" width="125%" text-allign=10px;>
		            	<line x1="0" y1="0" x2="80%" y2="0" style="stroke:rgb(255,132,0);stroke-width:3" />
		        	</svg>
			</div>
			<div class="mdl-cell mdl-cell--2-col mdl-cell--3col-tablet footerfix">
				<h5 class="widgetheading">Contact Me</h5>
				<p>
					<span class="glyphicon glyphicon-earphone"></span>&nbsp;+6222-7798983
					<br>
					<span class="glyphicon glyphicon-phone-alt"></span>&nbsp;+6222-7794545
				</p>
			</div>
			<div class="mdl-cell mdl-cell--3-col mdl-cell--3col-tablet footerfix">
				<h5 class="widgetheading">&nbsp;</h5>
				<p>
					<span class="glyphicon glyphicon-envelope"></span>&nbsp;+62811234734
					<br>
					<span class="glyphicon glyphicon-home"></span>&nbsp;Informatika@unpad.ac.id
				</p>
			</div>
			<div class="mdl-cell mdl-cell--4-col mdl-cell--3col-tablet footerfix"></div>
			<div class="mdl-cell mdl-cell--3-col mdl-cell--3col-tablet footerfix">
				<span style="color: #ff8400">Location</span>
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			</div>
		</div>
	</footer>
</body>
<script src="{{ asset('template') . '/js/responsive-slider.js' }}"></script>
	<script src="{{ asset('template') . '/js/wow.min.js' }}"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
<!-- 	<script type="text/javascript">
	  	$(document).ready( function () {
		    $('#myTable').DataTable();
		} );
  	</script> -->
</html>