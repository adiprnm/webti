@extends('layouts.website')

@section('page_title')
	Kurikulum
@endsection

@section('title')
	<h3 id="hightitle">Detail Dosen</h3>
	<h5 id="lowtitle">Detail Dosen</h5>
@endsection

@section('content')
	{{--  <div class="mdl-grid">  --}}
		{{--  @foreach($lecturer as $lec)  --}}
		<div style="margin-top:100px;" class="mdl-cell mdl-cell--12-col mdl-cell--9-col-tablet mdl-cell--12-col-phone" >
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--3-col mdl-cell--3-col-tablet mdl-cell--3-col-phone" style="margin-top: -90px">
					<div class="card-square mdl-card" style="height: 150px">
						<div class="mdl-card__media">
						  	<img height="200" width="150" src="{{ asset('normal_picts') . '/' . $lecturer->lecturer_photo }}">
						</div>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--9-col mdl-cell--9-col-tablet mdl-cell--9-col-phone" style="margin-top: -90px">
					<div class="card-square mdl-card" style="width: 400px; height: 150px">
						<div class="mdl-card__media">
						  	<div class="mdl-card__supporting-text">
							    <span><h5 style="margin-top: -10px;">{{ $lecturer->lecturer_name }}</h5></span>
							    <span><p><i class="fa fa-envelope"></i> &nbsp;{{ $lecturer->lecturer_email }}</span><br></p>
							    <span><p style="margin-top: -45px;"><i class="fa fa-phone"></i> &nbsp;{{ $lecturer->lecturer_phone }}</p></span>
							    <span><p style="margin-top: -45px;"><i class="fa fa-map-marker"></i> &nbsp;{{ $lecturer->lecturer_room }} </p></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--9-col-phone" style="margin-top: px">
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'Pengajaran')">Pengajaran</button>
					<button class="tablinks" onclick="openCity(event, 'Penelitian')">Penelitian</button>
					<button class="tablinks" onclick="openCity(event, 'Pengabdian')">Pengabdian</button>
					<button class="tablinks" onclick="openCity(event, 'Penunjang')">Penunjang</button>
				</div>
				<div id="Pengajaran" class="tabcontent">
					{!! $lecturer->lecturer_teaching !!} 
				</div>
				<div id="Penelitian" class="tabcontent" style="display: none;">
					{!! $lecturer->lecturer_research !!} 
				</div>
				<div id="Pengabdian" class="tabcontent" style="display: none;">
					{!! $lecturer->lecturer_devotion !!} 
				</div>
				<div id="Penunjang" class="tabcontent" style="display: none;">
					{!! $lecturer->lecturer_support !!} 
				</div>
			</div>
		</div>
		{{--  @endforeach  --}}
	{{--  </div>  --}}
	<script>
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}
	</script>
@endsection
		
		