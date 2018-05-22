@extends('layouts.manage')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body" style="margin: auto">
                    <h1>{{ $brand->name }}</h1>
                </div>
                <div class="panel-footer" style="height: 50px;">
                	 <a href="{{ route('brands.edit', ['id' => $brand->id]) }}" class="btn btn-info pull-left">Edit</a>
                    {!!Form::open([ 'method'  => 'DELETE', 'route' => [ 'brands.destroy', $brand ] ])!!}
                                {{ Form::hidden('id', $brand->id) }}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger pull-right']) !!}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection