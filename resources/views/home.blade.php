
@extends('layouts.manage')

@section('content')
    <div  class="row">
        <div class="col-12">
        <div style="margin-left: 0px; margin-right: 0px; padding: 0px" class="col-sm-12">
            @include('_includes/carousel')
        </div>
        
            
        </div>
        
    </div>
    <hr>
    <div class="row">
      
          <a href="#board" > <div class="col-sm-4" style="border-left: 6px solid black; border-bottom: 5px solid black;margin-left: 30%; border-radius:5px;  background: grey; color: white; margin-bottom: 20px"><h1 style="text-align: center">Suggested Fault</h1></div></a> 
       </div>
       <div  id="content" class="row">
       <div id="board" class="container">
              <div class="list-group">
              <a href="#" class="list-group-item">
                </a>
                            
                     @foreach($suggested as $problems)
                     <a  class="list-group-item"  style="text-decoration: none; color: #212121" href="{{ route('problem.solutions', ['id' => $problems->id]) }}"><h2><li><strong>{{ $problems->topic }}<span class="pull-right btn btn-lg btn-close"><h2> {{$problems->model->name}}</h2></span></strong> 
                        </li>
                    </h2>
                    <h3>{{$problems->description}}</h3>
                  </a>
                     @endforeach      
      
               
              
            </div>
       </div>  

    </div>
@endsection
