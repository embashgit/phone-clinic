@extends('layouts.manage')

@section('content')
<div  class="row">
    <div class="col-12">
    <div class="col-sm-8">
        @include('_includes/carousel')
    </div>
    <div id="sider" class="col-sm-4">
        <div ><button  type = "button" style="background: grey; color:black; " class="btn btn-lg btn-block btn-info"><h2 style="font-size: 2em; ">{{$mainPhone->brand}}</h2></button>
        </div>     
    
    <hr>
    <div class="row">

        @forelse($phone_type as $model) 
      <a style="text-decoration: none;" href="{{ route('model.problems', ['id' => $model->id]) }}"><div style="text-align: center; " class="panel ">
      <div class="panel-heading"><h2>{{ $model->name}}</h2></div>
      <div style="background: #96858F" class="panel-body"><img src="/dist/img/holder.jpg" width="100%" height="150px" style="margin: 0px"> </div>
      <div  style="background: #d5d5d5" class="panel-footer ">Phone Category: {{ $model->category }} <span class="pull-right">Model Number: {{ $model->number }}</span></div>
      </div></a>
      @empty
        <h3>Sorry No {{$mainPhone->brand}} Phones registered Yet</h3>
        @endforelse
    
    </div>
    </div>
          
    </div>
    <hr>


@endsection

     
     
