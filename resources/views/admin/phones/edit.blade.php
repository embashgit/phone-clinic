@extends('layouts.manage')
@section('content')
<div class="container">
	    <div class="row" style="margin-top: 100px">
	    	<a href="{{ route('brands.index') }}" class="btn btn-success btn-lg pull-right" >Back to list of Brands</a>

	        <div class="col-md-8 col-md-offset-2">
	            <div class="card" style="margin-top: 15px">
	                <div class="panel-heading">Edit 
	                Brand of Car</div>
		                <div class="panel-body">

							{!! Form::model($phone, ['method'=> 'PATCH', 'class'=>' form-label-left','route' => ['phones.update', $brand->id]]) !!}

								@include('phones.form', ['submit'=>'Update', 'class'=>'btn btn-block btn-lg btn-info'])

							{!! Form::close() !!}
						</div>
	            </div>
	        </div>
	    </div>
	</div>
@stop

