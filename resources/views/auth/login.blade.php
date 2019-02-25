@extends('master')
@section('header')
    @include('layouts.global.header.header')
@stop
@section('body')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Logowanie</div>

                <div class="panel-body">
                    {!! Form::open(['class'=>'form-horizontal','url'=>route('login')]) !!}

                        <div class="form-group">
                            {!! Form::label('email','Email',['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                            {!! Form::email('email',old('email'),['class'=>''. $errors->has('email') ? ' is-invalid' : 'form-control']) !!}
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    <div class="form-group">
                        {!! Form::label('password','Hasło',['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::password('password',['class'=>''. $errors->has('name') ? ' is-invalid' : 'form-control']) !!}
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Zapamiętaj mnie
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Zaloguj',['class'=>'btn btn-primary']) !!}


                                <a class="btn btn-link" href="{{ route('password.request') }}">Zapomniałeś hasła?</a>
                            </div>
                        </div>
                   {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection
@section('footer')
    @include('layouts.global.footer.footer')
@stop
