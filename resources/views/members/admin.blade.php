@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li><a href="{{ url('/admin/members') }}">Member</a></li>
          <li class="active">Tambah Member</li>
        </ul>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Tambah Member</h2>
          </div>
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
              <a href="#admin" aria-controls="admin" role="tab" data-toggle="tab">
                <i class="fa fa-user"></i> Admin
              </a>
            </li>
          </ul>

          <div class="tab-content">
      
      <div role="tabpanel" class="tab-pane active" id="admin">
    
        {!! Form::open(['url' => route('members.save.admins'),
        'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
        @include('members._form')
      {!! Form::close() !!}
      </div>

      </div>
              </div>
            </div>
          </div>
    </div>
@endsection
