@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
					<li class="active">Laporan</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Laporan</h2>
					</div>
		
					<div class="panel-body">
					
						<p> <a class="btn btn-primary" href="{{ url('/admin/laporans/create') }}">Tambah</a> </p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
<script src='//cloud.tinymce.com/stable/tinymce.min.js'></script>

<script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
@endsection