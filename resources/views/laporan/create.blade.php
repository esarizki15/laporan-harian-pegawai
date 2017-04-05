@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li><a href="{{ url('/admin/laporans') }}">Laporan</a></li>
          <li class="active">Tambah Laporan</li>
        </ul>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Tambah Laporan</h2>
          </div>

<ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="active">
		<a href="#user" aria-controls="user" role="tab" data-toggle="tab">
			<i class="fa fa-user"></i> Laporan
		</a>
	
	</ul>
	<div class="tab-content">
			
			<div role="tabpanel" class="tab-pane active" id="user">
		
				{!! Form::open(['url' => route('laporans.store'),
					'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}


                  <div class="form-group {!! $errors->has('author_id') ? 'has-error' : '' !!}">
                    {!! Form::label('id_penulis', 'Penulis', ['class'=>'col-md-2 control-label']) !!}
                    <div class="col-md-4">
                  {!! Form::select('id_penulis', [''=>'']+App\User::pluck('name','id')->all(), null, [
                    'class'=>'js-selectize',
                    'placeholder' => 'Pilih Penulis']) !!}
                      {!! $errors->first('id_penulis', '<p class="help-block">:message</p>') !!}
                    </div>
                  </div>
			            <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                    {!! Form::label('judul', 'Judul', ['class'=>'col-md-2 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('judul', null, ['class'=>'form-control']) !!}
                        {!! $errors->first('judul', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group{{ $errors->has('tanggal') ? ' has-error' : '' }}">
                    {!! Form::label('tanggal', 'Tanggal', ['class'=>'col-md-2 control-label']) !!}
                    <div class="col-md-6">
                      {!! Form::date('tanggal', \Carbon\Carbon::now()) !!}
                      {!! $errors->first('tanggal', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>

                <div class="form-group{{ $errors->has('isi') ? ' has-error' : '' }}">
                {!! Form::label('isi', 'Isi laporan', ['class'=>'col-md-2 control-label']) !!}
                  <div class="col-md-9">
                      <div>
                          <textarea id="mytextarea" name="isi"></textarea>
                      </div>
                      {!! $errors->first('isi', '<p class="help-block">:message</p>') !!}    
                </div>
                </div> 
      
                <div class="form-group">
                    <div class="col-md-5 col-md-offset-5">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"></i> Simpan
                        </button>
                    </div>
                </div>
              
                {!! Form::close() !!}
                </div>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection