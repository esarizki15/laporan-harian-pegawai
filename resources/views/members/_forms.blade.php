<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label('name', 'Nama', ['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
        
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {!! Form::label('email', 'Alamat Email', ['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::email('email', null, ['class'=>'form-control']) !!}
                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
        
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"></i> Simpan
                        </button>
                    </div>
                </div>
                {!! Form::close() !!}
                </div>
            </div>