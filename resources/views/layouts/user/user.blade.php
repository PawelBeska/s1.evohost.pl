<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Moje konto</div>
            <div class="panel-body">
                <div class="col-md-3 text-center">

                    <div class="table-responsive">
                        <table class="table table-bordered">

                            <tbody>
                            <tr>
                                <td>Filmów:</td>
                                <td>{{\Illuminate\Support\Facades\Auth::user()->movies()->count()}}</td>
                            </tr>

                            <tr>
                                <td>Wyświetleń:</td>
                                <td>0</td>
                            </tr>

                            </tbody></table>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Ustawienia</div>
            <div class="panel-body">
                <div id="errors"></div>
                <div class="row">
                    <div class="col-xs-6 col-md-4 text-center">Zmień email
                        <hr>

                        {!! Form::open(['class'=>'form-horizontal edit_email','url'=>route('edit_my_account_email')]) !!}
                        <div class="form-group">
                            {!! Form::label('email','Email',['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::email('email',\Illuminate\Support\Facades\Auth::user()->email,['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Zmień email',['class'=>'btn btn-success']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                    <div class="col-xs-6 col-md-4 text-center">Zmień hasło
                        <hr>

                        {!! Form::open(['class'=>'form-horizontal edit_password','url'=>route('edit_my_account_password')]) !!}
                        <div class="form-group">
                            {!! Form::label('newpassword','Nowe hasło',['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('newpassword',['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('newpassword_confirmation','Powtórz nowe hasło',['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('newpassword_confirmation',['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Zmień hasło',['class'=>'btn btn-success']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>