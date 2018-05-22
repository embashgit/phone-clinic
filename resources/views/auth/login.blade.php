@extends('layouts.nav')

@section('content')
<div style="background:">
    <div class="container">
    <div class="row">
        <div class="col-4 col-offset-4">
           
            <div class="panel ">
               
                 <h1 align="center">Login</h1>
                 <hr>
                <div class="panel-body">
                    <form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         

                            <div>
                                <input id="email" type="email" class="form-control" name="email" placeholder="Type email here" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                            <hr>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           

                            <div >
                                <input id="password" type="password" class="form-control" placeholder="Enter Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="panel-footer">
                            <div class="form-group">
                            <div class="col-4 col-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a style="text-decoration: none; color: white" class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>    
                        </div>
                        
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>    
</div>

@endsection
