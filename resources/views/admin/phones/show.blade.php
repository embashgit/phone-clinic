@extends('layouts.manage')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 col-offset-2" style="margin-top: 100px">
            <div class="panel panel-default">
                
                
                <div class="panel-body" style="margin: auto;text-align: center">
                    <h1 align="center"><strong>{{ $phone->brand }}</strong></h1>
                
                </div>
                
                <div class="panel-footer" style="height: 50px;">
                	 <a href="{{ route('phones.edit', ['id' => $phone->id]) }}" class="btn btn-info pull-left">Edit</a>
                    {!!Form::open([ 'method'  => 'DELETE', 'route' => [ 'phones.destroy', $phone ] ])!!}
                                {{ Form::hidden('id', $phone->id) }}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger pull-right']) !!}
                    {{ Form::close() }}
                </div>
            </div>
    
        </div>
    </div>
</div>
@endsection