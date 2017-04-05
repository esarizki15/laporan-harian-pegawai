                <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                    {!! Form::label('judul', 'Judul', ['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('judul', null, ['class'=>'form-control']) !!}
                        {!! $errors->first('judul', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <form method="post">
                    <textarea id="mytextarea">Coba</textarea>
                    
                </form>
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