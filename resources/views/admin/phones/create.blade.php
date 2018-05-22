@extends('layouts.nav')
@section('content')

	<div class="container">
	     <div class="row" style="margin-top:100px;">
   	<a href="{{ route('phones.index') }}" class="btn btn-success btn-lg pull-right">Back to list of Brands</a>
	        <div class="col-4 col-offset-4">
	            <div class="panel" style="height: 300px;">
	                <div class="panel-heading">Create a New Brand of Phone</div>
		                <div class="panel-body">
		                <div class="col-8 col-offset-2">
							 @if (session()->has('success_message'))
						 <hr>
					            <div class="alert alert-success">
					                {{ Session::get('success_message') }}
					            </div>
					        @endif

					            @if (session()->has('error_message'))
					            <hr>

					            <div class="alert alert-danger">
					                {{ session()->get('error_message') }}
					            </div>
					        @endif
						</div>
							{!! Form::open(['route'=>'phones.store', 'class'=>'form-horizontal form-label-left']) !!}
								@include('admin.phones.form', ['submit'=>'Save New Type of Car'])
							{!! Form::close() !!}
						</div>
	            </div>
	        </div>
	    </div>
	</div>
@stop

