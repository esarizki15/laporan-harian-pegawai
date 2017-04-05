@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
					<li class="active">Member</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Member</h2>
					</div>
		
					<div class="panel-body">
						<p>
						<div class="dropdown">
							<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Tambah
							<span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="{{ url('/admin/members/admins/create') }}"><i class="fa fa-user"> Admin</i></a></li>
								<li><a href="{{ url('/admin/members/user/create') }}"><i class="fa fa-user-o"> User</i></a></li>
								<li><a href="{{ url('/admin/members/atasan/create') }}"><i class="fa fa-user-circle-o"> Atasan</i></a></li>
							</ul>
						</div>
						</p>
						{!! $html->table(['class'=>'table-striped']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
	{!! $html->scripts() !!}
@endsection